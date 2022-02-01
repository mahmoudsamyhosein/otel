<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Front_end;

class HomeController extends Controller
{
    

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $front_end = new Front_end();

        return view('admin/front_end/index',compact('front_end'));
       
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front_ends.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request  $request)
    {
        $new_front_end = new Front_end();

        $new_front_end->theme_info = $request->theme_info;
        $new_front_end->theme_name = $request->theme_name;
        $new_front_end->theme_author = $request->theme_author;
        $new_front_end->pc_menu_id = $request->pc_menu_id;
        $new_front_end->pc_menu_text = $request->pc_menu_text;
        $new_front_end->pc_menu_link = $request->pc_menu_link;
        $new_front_end->pc_menu_logo= $request->pc_menu_logo;
        $new_front_end->mobile_menu_id = $request->mobile_menu_id;
        $new_front_end->mobile_menu_text = $request->mobile_menu_text;
        $new_front_end->mobile_menu_link = $request->mobile_menu_link;
        $new_front_end->mobile_menu_logo = $request->mobile_menu_logo;
        $new_front_end->slider_id = $request->slider_id;
        $new_front_end->slider_image = $request->slider_image;
        $new_front_end->slider_text = $request->slider_text;
        $new_front_end->slider_url = $request->slider_url;
        $new_front_end->about_us_id = $request->about_us_id;
        $new_front_end->about_us_services = $request->about_us_services;
        $new_front_end->about_us_link = $request->about_us_link;
        $new_front_end->about_us_image = $request->about_us_image;
        $new_front_end->services_id = $request->services_id;
        $new_front_end->services_text = $request->services_text;
        $new_front_end->services_link = $request->services_link;
        $new_front_end->services_icon = $request->services_icon;
        $new_front_end->fun_facts_id = $request->fun_facts_id;
        $new_front_end->fun_facts_text = $request->fun_facts_text;
        $new_front_end->fun_facts_link = $request->fun_facts_link;
        $new_front_end->fun_facts_image = $request->fun_facts_image;
        $new_front_end->profilo_id = $request->profilo_id;
        $new_front_end->profilo_text = $request->profilo_text;
        $new_front_end->profilo_link = $request->profilo_link;
        $new_front_end->profilo_image = $request->profilo_image;
        $new_front_end->calltoaction_id = $request->calltoaction_id;
        $new_front_end->calltoaction_text = $request->calltoaction_text;
        $new_front_end->calltoaction_link = $request->calltoaction_link;
        $new_front_end->calltoaction_image = $request->calltoaction_image;
        $new_front_end->blog_id = $request->blog_id;
        $new_front_end->blog_text = $request->blog_text;
        $new_front_end->blog_link = $request->blog_link;
        $new_front_end->blog_image = $request->blog_image;
        $new_front_end->blog_body  = $request->blog_body;
        $new_front_end->partner_id = $request->partner_id;
        $new_front_end->partner_text = $request->partner_text;
        $new_front_end->partner_link = $request->partner_link;
        $new_front_end->partner_image = $request->partner_image;
        $new_front_end->footer_id = $request->footer_id;
        $new_front_end->footer_text = $request->footer_text;
        $new_front_end->footer_link = $request->footer_link;
        $new_front_end->footer_image = $request->footer_image;
        $new_front_end->page_id = $request->page_id;
        $new_front_end->pages_link = $request->pages_link;
        $new_front_end->pages_text = $request->pages_text;
        $new_front_end->pages_content = $request->pages_content;
        $new_front_end->theme_custom_css = $request->theme_custom_css;
        $new_front_end->theme_custom_js = $request->theme_custom_js;
        $new_front_end->theme_colors = $request->theme_colors;
        

        
        $new_front_end->save();

        
        return redirect()->route('front_ends.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Front_end $front_end)
    {
        return view('front_ends.show',['front_end' => $front_end]);
        
    }

    public function view(Request $request)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('front_ends.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,Front_end $front_end)
    {
       
        $front_end->theme_info = $request->theme_info;
        $front_end->theme_name = $request->theme_name;
        $front_end->theme_author = $request->theme_author;
        $front_end->pc_menu_id = $request->pc_menu_id;
        $front_end->pc_menu_text = $request->pc_menu_text;
        $front_end->pc_menu_link = $request->pc_menu_link;
        $front_end->pc_menu_logo= $request->pc_menu_logo;
        $front_end->mobile_menu_id = $request->mobile_menu_id;
        $front_end->mobile_menu_text = $request->mobile_menu_text;
        $front_end->mobile_menu_link = $request->mobile_menu_link;
        $front_end->mobile_menu_logo = $request->mobile_menu_logo;
        $front_end->slider_id = $request->slider_id;
        $front_end->slider_image = $request->slider_image;
        $front_end->slider_text = $request->slider_text;
        $front_end->slider_url = $request->slider_url;
        $front_end->about_us_id = $request->about_us_id;
        $front_end->about_us_services = $request->about_us_services;
        $front_end->about_us_link = $request->about_us_link;
        $front_end->about_us_image = $request->about_us_image;
        $front_end->services_id = $request->services_id;
        $front_end->services_text = $request->services_text;
        $front_end->services_link = $request->services_link;
        $front_end->services_icon = $request->services_icon;
        $front_end->fun_facts_id = $request->fun_facts_id;
        $front_end->fun_facts_text = $request->fun_facts_text;
        $front_end->fun_facts_link = $request->fun_facts_link;
        $front_end->fun_facts_image = $request->fun_facts_image;
        $front_end->profilo_id = $request->profilo_id;
        $front_end->profilo_text = $request->profilo_text;
        $front_end->profilo_link = $request->profilo_link;
        $front_end->profilo_image = $request->profilo_image;
        $front_end->calltoaction_id = $request->calltoaction_id;
        $front_end->calltoaction_text = $request->calltoaction_text;
        $front_end->calltoaction_link = $request->calltoaction_link;
        $front_end->calltoaction_image = $request->calltoaction_image;
        $front_end->blog_id = $request->blog_id;
        $front_end->blog_text = $request->blog_text;
        $front_end->blog_link = $request->blog_link;
        $front_end->blog_image = $request->blog_image;
        $front_end->blog_body  = $request->blog_body;
        $front_end->partner_id = $request->partner_id;
        $front_end->partner_text = $request->partner_text;
        $front_end->partner_link = $request->partner_link;
        $front_end->partner_image = $request->partner_image;
        $front_end->footer_id = $request->footer_id;
        $front_end->footer_text = $request->footer_text;
        $front_end->footer_link = $request->footer_link;
        $front_end->footer_image = $request->footer_image;
        $front_end->page_id = $request->page_id;
        $front_end->pages_link = $request->pages_link;
        $front_end->pages_text = $request->pages_text;
        $front_end->pages_content = $request->pages_content;
        $front_end->theme_custom_css = $request->theme_custom_css;
        $front_end->theme_custom_js = $request->theme_custom_js;
        $front_end->theme_colors = $request->theme_colors;
        
        $front_end->save();

        return redirect(route('front_ends.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Front_end $front_end)
    {
        $front_end->delete();

        return redirect()->route('front_ends.index');
            
    }
}
