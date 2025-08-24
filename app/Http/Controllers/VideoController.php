<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    function videoform()
    {
        return view('video.videoform');
    }
    function insertvideo(Request $req)
    {
        $req->validate(
                [
                    'title' => 'required',
                    'video' => 'required|mimes:mp4,avi,mov,wmv'
                ],
                [
                    'title.required' => 'Enter  video title',
                    'video.required' => 'Upload  video',
                ]
            );

        $vid_path = $req->file('video')->store('video_folder', 'public');
        $data = new video();
        $data->title = $req->title;
        $data->video = $vid_path;
        $data->visible = $req->has('visible') ? 1 : 0;
        $data->save();
        return redirect()->route('videoform')->with('message', 'Add Video Successfully');
    }

    function all_video()
    {
        $data = video::all();
        return view('video.allvideo', compact('data'));
    }

    function delete_vid($id)
    {
        $data = video::find($id);
        $data->delete();

        $pickvidpath = public_path('storage/') . $data->video;
        if (file_exists($pickvidpath)) {
            @unlink($pickvidpath);
        }
        return redirect()->route('all_video')->with('message', 'Video deleted successfully.');
    }
    function edit_vid($id)
    {
        $data = video::find($id);
        return view('video.updatevideo', compact('data'));
    }

    function update_video(Request $req, $id)
    {
        $data = video::find($id);
        $data->title = $req->title;
        $data->visible = $req->has('visible') ? 1 : 0;
        if ($req->hasfile('video')) {

            $pickvidpath = public_path('storage/') . $data->video;
            if (file_exists($pickvidpath)) {
                @unlink($pickvidpath);
            }
            $vid_path = $req->file('video')->store('video_folder', 'public');
            $data->video = $vid_path;
        }
        $data->save();
        return redirect()->route('all_video')->with('message', 'Update Video Successfully');
    }
}
