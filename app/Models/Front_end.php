<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Front_end extends Model
{
    use HasFactory;

    protected $fillable= [
        'id',
        'theme_info',
        'theme_name',
        'theme_author',
        'pc_menu_id',
        'pc_menu_text',
        'pc_menu_link',
        'pc_menu_logo',
        'mobile_menu_id',
        'mobile_menu_text',
        'mobile_menu_link',
        'mobile_menu_logo',
        'slider_id',
        'slider_image',
        'slider_text',
        'slider_url',
        'about_us_id',
        'about_us_services',
        'about_us_link',
        'about_us_image',
        'services_id',
        'services_text',
        'services_link',
        'services_icon',
        'fun_facts_id',
        'fun_facts_text',
        'fun_facts_link',
        'fun_facts_image',
        'profilo_id',
        'profilo_text',
        'profilo_link',
        'profilo_image',
        'calltoaction_id',
        'calltoaction_text',
        'calltoaction_link',
        'calltoaction_image',
        'blog_id',
        'blog_text',
        'blog_link',
        'blog_image',
        'blog_body',
        'partner_id',
        'partner_text',
        'partner_link',
        'partner_image',
        'footer_id',
        'footer_text',
        'footer_link',
        'footer_image',
        'page_id',
        'pages_link',
        'pages_text',
        'pages_content',
        'theme_custom_css',
        'theme_custom_js',
        'theme_colors',
    ];
}
