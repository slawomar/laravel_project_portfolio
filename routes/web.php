<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ServiceController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminHomePageController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminSkillController;
use App\Http\Controllers\Admin\AdminEducationController;
use App\Http\Controllers\Admin\AdminExperienceController;
use App\Http\Controllers\Admin\AdminTestimonialController;
use App\Http\Controllers\Admin\AdminClientController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\AdminPageController;

/* Front End */
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services');

/* Admin */
Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home')->middleware('admin:admin');
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');
Route::get('/admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');
Route::post('/admin/forget-password-submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
Route::get('/admin/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password');
Route::post('/admin/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');

Route::get('/admin/edit-profile', [AdminProfileController::class, 'index'])->name('admin_profile')->middleware('admin:admin');
Route::post('/admin/edit-profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit');

Route::get('/admin/home-banner', [AdminHomePageController::class, 'banner'])->name('admin_home_banner')->middleware('admin:admin');
Route::post('/admin/home-banner-update', [AdminHomePageController::class, 'banner_update'])->name('admin_home_banner_update')->middleware('admin:admin');

Route::get('/admin/home-about', [AdminHomePageController::class, 'about'])->name('admin_home_about')->middleware('admin:admin');
Route::post('/admin/home-about-update', [AdminHomePageController::class, 'about_update'])->name('admin_home_about_update')->middleware('admin:admin');

Route::get('/admin/home-skill', [AdminHomePageController::class, 'skill'])->name('admin_home_skill')->middleware('admin:admin');
Route::post('/admin/home-skill-update', [AdminHomePageController::class, 'skill_update'])->name('admin_home_skill_update')->middleware('admin:admin');

Route::get('/admin/skill/show', [AdminSkillController::class, 'index'])->name('admin_skill_show')->middleware('admin:admin');
Route::get('/admin/skill/add', [AdminSkillController::class, 'add'])->name('admin_skill_add')->middleware('admin:admin');
Route::post('/admin/skill/submit', [AdminSkillController::class, 'store'])->name('admin_skill_submit')->middleware('admin:admin');
Route::get('/admin/skill/edit/{id}', [AdminSkillController::class, 'edit'])->name('admin_skill_edit')->middleware('admin:admin');
Route::post('/admin/skill/update/{id}', [AdminSkillController::class, 'update'])->name('admin_skill_update')->middleware('admin:admin');
Route::get('/admin/skill/delete/{id}', [AdminSkillController::class, 'delete'])->name('admin_skill_delete')->middleware('admin:admin');

Route::get('/admin/home-qualification', [AdminHomePageController::class, 'qualification'])->name('admin_home_qualification')->middleware('admin:admin');
Route::post('/admin/home-qualification-update', [AdminHomePageController::class, 'qualification_update'])->name('admin_home_qualification_update')->middleware('admin:admin');

Route::get('/admin/education/show', [AdminEducationController::class, 'index'])->name('admin_education_show')->middleware('admin:admin');
Route::get('/admin/education/add', [AdminEducationController::class, 'add'])->name('admin_education_add')->middleware('admin:admin');
Route::post('/admin/education/submit', [AdminEducationController::class, 'store'])->name('admin_education_submit')->middleware('admin:admin');
Route::get('/admin/education/edit/{id}', [AdminEducationController::class, 'edit'])->name('admin_education_edit')->middleware('admin:admin');
Route::post('/admin/education/update/{id}', [AdminEducationController::class, 'update'])->name('admin_education_update')->middleware('admin:admin');
Route::get('/admin/education/delete/{id}', [AdminEducationController::class, 'delete'])->name('admin_education_delete')->middleware('admin:admin');

Route::get('/admin/experience/show', [AdminExperienceController::class, 'index'])->name('admin_experience_show')->middleware('admin:admin');
Route::get('/admin/experience/add', [AdminExperienceController::class, 'add'])->name('admin_experience_add')->middleware('admin:admin');
Route::post('/admin/experience/submit', [AdminExperienceController::class, 'store'])->name('admin_experience_submit')->middleware('admin:admin');
Route::get('/admin/experience/edit/{id}', [AdminExperienceController::class, 'edit'])->name('admin_experience_edit')->middleware('admin:admin');
Route::post('/admin/experience/update/{id}', [AdminExperienceController::class, 'update'])->name('admin_experience_update')->middleware('admin:admin');
Route::get('/admin/experience/delete/{id}', [AdminExperienceController::class, 'delete'])->name('admin_experience_delete')->middleware('admin:admin');

Route::get('/admin/home-counter', [AdminHomePageController::class, 'counter'])->name('admin_home_counter')->middleware('admin:admin');
Route::post('/admin/home-counter-update', [AdminHomePageController::class, 'counter_update'])->name('admin_home_counter_update')->middleware('admin:admin');

Route::get('/admin/home-testimonial', [AdminHomePageController::class, 'testimonial'])->name('admin_home_testimonial')->middleware('admin:admin');
Route::post('/admin/home-testimonial-update', [AdminHomePageController::class, 'testimonial_update'])->name('admin_home_testimonial_update')->middleware('admin:admin');

Route::get('/admin/testimonial/show', [AdminTestimonialController::class, 'index'])->name('admin_testimonial_show')->middleware('admin:admin');
Route::get('/admin/testimonial/add', [AdminTestimonialController::class, 'add'])->name('admin_testimonial_add')->middleware('admin:admin');
Route::post('/admin/testimonial/submit', [AdminTestimonialController::class, 'store'])->name('admin_testimonial_submit')->middleware('admin:admin');
Route::get('/admin/testimonial/edit/{id}', [AdminTestimonialController::class, 'edit'])->name('admin_testimonial_edit')->middleware('admin:admin');
Route::post('/admin/testimonial/update/{id}', [AdminTestimonialController::class, 'update'])->name('admin_testimonial_update')->middleware('admin:admin');
Route::get('/admin/testimonial/delete/{id}', [AdminTestimonialController::class, 'delete'])->name('admin_testimonial_delete')->middleware('admin:admin');

Route::get('/admin/home-client', [AdminHomePageController::class, 'client'])->name('admin_home_client')->middleware('admin:admin');
Route::post('/admin/home-client-update', [AdminHomePageController::class, 'client_update'])->name('admin_home_client_update')->middleware('admin:admin');

Route::get('/admin/client/show', [AdminClientController::class, 'index'])->name('admin_client_show')->middleware('admin:admin');
Route::get('/admin/client/add', [AdminClientController::class, 'add'])->name('admin_client_add')->middleware('admin:admin');
Route::post('/admin/client/submit', [AdminClientController::class, 'store'])->name('admin_client_submit')->middleware('admin:admin');
Route::get('/admin/client/edit/{id}', [AdminClientController::class, 'edit'])->name('admin_client_edit')->middleware('admin:admin');
Route::post('/admin/client/update/{id}', [AdminClientController::class, 'update'])->name('admin_client_update')->middleware('admin:admin');
Route::get('/admin/client/delete/{id}', [AdminClientController::class, 'delete'])->name('admin_client_delete')->middleware('admin:admin');

Route::get('/admin/home-service', [AdminHomePageController::class, 'service'])->name('admin_home_service')->middleware('admin:admin');
Route::post('/admin/home-service-update', [AdminHomePageController::class, 'service_update'])->name('admin_home_service_update')->middleware('admin:admin');

Route::get('/admin/service/show', [AdminServiceController::class, 'index'])->name('admin_service_show')->middleware('admin:admin');
Route::get('/admin/service/add', [AdminServiceController::class, 'add'])->name('admin_service_add')->middleware('admin:admin');
Route::post('/admin/service/submit', [AdminServiceController::class, 'store'])->name('admin_service_submit')->middleware('admin:admin');
Route::get('/admin/service/edit/{id}', [AdminServiceController::class, 'edit'])->name('admin_service_edit')->middleware('admin:admin');
Route::post('/admin/service/update/{id}', [AdminServiceController::class, 'update'])->name('admin_service_update')->middleware('admin:admin');
Route::get('/admin/service/delete/{id}', [AdminServiceController::class, 'delete'])->name('admin_service_delete')->middleware('admin:admin');

Route::get('/admin/page/services', [AdminPageController::class, 'services'])->name('admin_page_services')->middleware('admin:admin');
Route::post('/admin/page/services/update', [AdminPageController::class, 'services_update'])->name('admin_page_services_update')->middleware('admin:admin');