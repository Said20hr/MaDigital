<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\admin\Account;
use App\Models\admin\Artist;
use App\Models\admin\Label;
use App\Models\genre;
use App\Models\Languages;
use App\Models\primaryGenre;
use App\Models\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Monarobase\CountryList\CountryListFacade;

class AdminController extends Controller
{
    public function index()
    {

        $labels = User::where('role_id', '3')->get();
        $user = User::where('email','=','admin@gmail.com')->first();

        Auth::loginUsingId($user->id, TRUE);

        return view('admin.dashboard', compact('labels'));
    }

    public function dashboard_new()
    {

        $labels = User::where('role_id', '3')->get();
        $user = User::where('email','=','admin@gmail.com')->first();

        Auth::loginUsingId($user->id, TRUE);

        return view('admin.dashboard-new', compact('labels'));
    }
    public function release(){
        $countries = CountryListFacade::getList('en');
        $collections = Excel::toArray(new Languages,'languages.xlsx');

       /* $genres = Excel::toArray(new Languages,'genre.xlsx');
        foreach($genres[0] as $genre)
        {
            genre::firstOrCreate([
                'name' => $genre[0],
            ]);
            primaryGenre::firstOrCreate([
                'name' => $genre[1],
                'genre_id' => genre::where('name',$genre[0])->first()->id,
            ]);
        }*/

        $languages = $collections[0];
        $labels = User::where('role_id', '3')->get();
        return view('admin.realease', compact('labels','countries','languages'));

    }
    public function file(){
        $countries = CountryListFacade::getList('en');
        $collections = Excel::toArray(new Languages,'languages.xlsx');

        /* $genres = Excel::toArray(new Languages,'genre.xlsx');
         foreach($genres[0] as $genre)
         {
             genre::firstOrCreate([
                 'name' => $genre[0],
             ]);
             primaryGenre::firstOrCreate([
                 'name' => $genre[1],
                 'genre_id' => genre::where('name',$genre[0])->first()->id,
             ]);
         }*/

        $languages = $collections[0];
        $labels = User::where('role_id', '3')->get();
        return view('admin.file', compact('labels','countries','languages'));

    }


    public function loginForm()
    {
        //return view('auth.login');
    }
    //for logout
    public function Logout()
    {
        Auth::logout();
        return redirect('admin/login');
    }
    //for chat view
    public function Chat()
    {
        return view('admin.chat.index');
    }
    //for update Profile
    public function update_profile(Request $req)
    {
        if ($req->pass != '') {
            $pass = Hash::make($req->pass);
        } else {
            $pass = Auth::user()->password;
        }
        if ($req->img) {
            $img = $req->img;
            $img_name = rand(111111, 9999999) . '.' . $img->getClientOriginalExtension();
            $img->storeAs('public/image', $img_name);
        } else {
            $img_name = $req->old_img;
        }

        User::where(['id' => Auth::user()->id])->update([
            'first_name' => $req->fname,
            'last_name' => $req->lname,
            'payment_method' => $req->payment_method,
            'picture' => $img_name,
            'password' => $pass,
            'contact_no' => $req->tPhone

        ]);
        return redirect()->back()->with('success', 'Successfully updated Your Account!');
    }
    //label functions
    public function labels()
    {
        $labels = Label::with(['account'])->get();
        // $accounts = Account::where('role_id', null)->orWhere('role_id', 0)->get();
        $accounts = Account::get();
        // echo "<pre>";
        // dd($accounts);
        // exit;
        return view('admin.label.labels-list', compact('labels', 'accounts'));
    }
    public function insert_label(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'label_name' => 'required',
                'account' => 'required',
                // 'email' => 'required',
                'country' => 'required',
                'artist_many' => 'max:20',
            ]);
            if ($request->hasFile('img')) {
                $img = $request->img;
                $img_name = rand(111111, 9999999) . '.' . $request->img->getClientOriginalExtension();
                $request->img->storeAs('public/image', $img_name);
            } else {
                $img_name = "";
            }
            Label::create([
                // 'first_name' => $request->fname,
                'account_id' => $request->account,
                'parent_label' => $request->parent_label,
                'label_name' => $request->label_name,
                'beatport' => $request->beatport,
                'traxsource' => $request->traxsource,
                'email' => $request->email,
                'country' => $request->country,
                'website' => $request->website,
                'my_space' => $request->my_space,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'sound_cloud' => $request->sound_cloud,
                'youtube' => $request->youtube,
                'genre_1' => $request->genre_1,
                'genre_2' => $request->genre_2,
                'image' => $img_name,
                'compilations_label' => $request->compilations_label,
                'biography' => $request->biography,
            ]);

            Account::where('id', $request->account)->update(['role_id' => 3]);
            return redirect()->back()->with('success', 'Label Inserted Successfully');
        } else {
            return abort(404);
        }
    }
    public function edit_label($id)
    {
        $label = Label::where('id', $id)->first();
        $labels = Label::where('id', '!=', $id)->get();
        // $accounts = Account::where('role_id', null)->orWhere('role_id', 0)->get();
        $accounts = Account::get();


        return view('admin.label.edit_label', compact('label', 'labels', 'accounts'));
    }

     public function view_artists($id)
    {
        // $labels = Label::with(['artists'])->get();
        $artists = Artist::where('label_id', '=', $id)->get();
        // $accounts = Account::where('role_id', null)->orWhere('role_id', 0)->get();
        $accounts = Account::get();
        return view('admin.label.view_artists', compact('artists', 'accounts'));
    }

    public function update_label(Request $request)
    {

        if ($request->isMethod('post')) {
            $request->validate([
                'label_name' => 'required',
                'account' => 'required',
                // 'email' => 'required',
                'country' => 'required',
                'artist_many' => 'max:20',
            ]);
            if ($request->hasFile('img')) {
                File::delete(public_path('storage/image/' . $request->old_img));
                $img_name = rand(111111, 9999999) . '.' . $request->img->getClientOriginalExtension();
                $request->img->storeAs('public/image', $img_name);
            } else {
                $img_name = "";
            }
            Label::where('id', $request->id)->first()->account->update(['role_id' => 0]);
            Label::where('id', $request->id)->update([
                // 'first_name' => $request->fname,
                'account_id' => $request->account,
                'parent_label' => $request->parent_label,
                'label_name' => $request->label_name,
                'beatport' => $request->beatport,
                'traxsource' => $request->traxsource,
                'email' => $request->email,
                'country' => $request->country,
                'website' => $request->website,
                'my_space' => $request->my_space,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'sound_cloud' => $request->sound_cloud,
                'youtube' => $request->youtube,
                'genre_1' => $request->genre_1,
                'genre_2' => $request->genre_2,
                'image' => $img_name,
                'compilations_label' => $request->compilations_label,
                'biography' => $request->biography,
            ]);

            Account::where('id', $request->account)->update(['role_id' => 3]);
            return redirect()->back()->with('success', 'Label Updated Successfully');
        } else {
            return abort(404);
        }
    }
    public function delete_label($id)
    {
        $delete = User::where('id', $id)->delete();
        if ($delete) {
            return redirect()->back()->with('success', 'Label Deleted Successfully');
        }
    }
    //artists functions
    public function artists()
    {
        $artists = Artist::with(['label'])->get();
        $labels = Label::get();
        $accounts = Account::where('role_id', null)->orWhere('role_id', 0)->get();
        return view('admin.artist.artist-list', compact('artists', 'labels', 'accounts'));
    }
    public function insert_artist(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'label_id' => 'required',
                'fname' => 'required',
                'lname' => 'required',
                'gender' => 'required',
                'phone' => 'required',
                'country' => 'required',
                'phone' => 'required',
            ]);
            if ($request->hasFile('img')) {
                $img_name = rand(111111, 9999999) . '.' . $request->img->getClientOriginalExtension();
                $request->img->storeAs('public/image', $img_name);
            } else {
                $img_name = "";
            }
            Artist::create([
                'label_id' => $request->label_id,
                'name' => $request->name,
                'contact_email' => $request->email,
                'first_name' => $request->fname,
                'last_name' => $request->lname,
                'gender' => $request->gender,
                'telephone' => $request->phone,
                'image' => $img_name,
                'biography' => $request->biography,
                'release_feed' => $request->release_feed,
                'artist_feed' => $request->artist_feed,
                'building_name_no' => $request->building_name_no,
                'street' => $request->street,
                'area' => $request->area,
                'town' => $request->town,
                'county' => $request->county,
                'post_code' => $request->post_code,
                'country' => $request->country,
                'apple_music_profile' => $request->apple_profile,
                'apple_music_URL' => $request->apple_music_url,
                'facebook' => $request->facebook,
                'sound_cloud' => $request->sound_cloud,
                'spotify_profile' => $request->spotify_profile,
                'spotify_URL' => $request->spotify_url,
                'twitter' => $request->twitter,
                'website' => $request->website,
            ]);
            return redirect()->back()->with('success', 'Artist Inserted Successfully');
        }
    }
    public function edit_artist($id)
    {
        $artist = Artist::where('id', $id)->first();
        $labels = Label::get();
        $accounts = Account::where('role_id', null)->orWhere('role_id', 0)->get();
        return view('admin.artist.edit_artist', compact('artist', 'labels', 'accounts'));
    }
    public function update_artist(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'label_id' => 'required',
                'fname' => 'required',
                'lname' => 'required',
                'gender' => 'required',
                'phone' => 'required',
                'country' => 'required',
                'phone' => 'required',
            ]);
            if ($request->hasFile('img')) {
                File::delete(public_path('storage/image/' . $request->old_img));
                $img_name = rand(111111, 9999999) . '.' . $request->img->getClientOriginalExtension();
                $request->img->storeAs('public/image', $img_name);
            } else {
                $img_name = "";
            }
            Artist::where('id', $request->id)->update([
                'label_id' => $request->label_id,
                'name' => $request->name,
                'contact_email' => $request->email,
                'first_name' => $request->fname,
                'last_name' => $request->lname,
                'gender' => $request->gender,
                'telephone' => $request->phone,
                'image' => $img_name,
                'biography' => $request->biography,
                'release_feed' => $request->release_feed,
                'artist_feed' => $request->artist_feed,
                'building_name_no' => $request->building_name_no,
                'street' => $request->street,
                'area' => $request->area,
                'town' => $request->town,
                'county' => $request->county,
                'post_code' => $request->post_code,
                'country' => $request->country,
                'apple_music_profile' => $request->apple_profile,
                'apple_music_URL' => $request->apple_music_url,
                'facebook' => $request->facebook,
                'sound_cloud' => $request->sound_cloud,
                'spotify_profile' => $request->spotify_profile,
                'spotify_URL' => $request->spotify_url,
                'twitter' => $request->twitter,
                'website' => $request->website,
            ]);
            return redirect()->back()->with('success', 'Artist Updated Successfully');
        } else {
            return abort(404);
        }
    }
    public function delete_artist($id)
    {
        $delete = User::where('id', $id)->delete();
        if ($delete) {
            return redirect()->back()->with('success', 'Artist Deleted Successfully');
        }
    }
    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');
    //     if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
    //         $user = Admin::where('email', $request->email)->first();
    //         Auth::guard('admin')->login($user);
    //         return redirect()->route('admin.home');
    //     }
    //     return redirect()->route('admin.login')->with('status', 'Failed To Process Login');
    // }
    // public function logout()
    // {

    //     Auth::logout();
    //     return redirect('admin/login');
    //     Auth::guard('admin')->logout();
    //     return redirect()->route('admin.login')->with('status', 'Logout successfully');
    // }
}
