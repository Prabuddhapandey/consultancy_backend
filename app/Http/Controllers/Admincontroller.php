<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\Rating;
use App\Models\Destination;
use App\Models\Blog;
use App\Models\Instructor;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\Courses;
use App\Models\Branch;
use App\Models\Division;
use App\Models\Meta;
use App\Models\Service;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function index()
   {
    return view('admin.admin_home');
   }

   public function meta()
   {
      return view('admin.meta.meta');
   }

   public function storemeta(Request $request)
   {
      $meta= new Meta;
      $meta->page=$request->input('page');
      $meta->title=$request->input('title');
      $meta->meta_keywords=$request->input('meta_keywords');
      $meta->meta_descriptions=$request->input('meta_descriptions');
      $meta->save();
     return back()->with('success', 'stored Sucessfully');
      
   }

   public function metatable()
    { 
       $profileData=Meta::whereNot('page','blog_details')->whereNot('page','course_details')->whereNot('page','service_details')->whereNot('page','destination_details')->get();
       return view('admin.meta.meta_table',compact('profileData'));
    }
    

    
    public function editmeta(string $id,Request $request)
    { 
       $profileData=Meta::find($id);
       return view('admin.meta.edit_meta',compact('profileData'));
    }
    

    public function updatemeta(string $id,Request $request)
    {
      $meta=Meta::find($id);
      $meta->page=$request->input('page');
      $meta->title=$request->input('title');
      $meta->meta_keywords=$request->input('meta_keywords');
      $meta->meta_descriptions=$request->input('meta_descriptions');
      $meta->update();
      return back()->with('success', 'Updated Sucessfully');
      


    }

public function createPage()
{
   return view('admin.admin_create_page');
  }


  public function editPage()
{
   return view('admin.admin_edit_page');
  }

   public function logout(Request $request)
   {
    Auth::guard('web')->logout();
    
    // $request->session()->invalid();

    // $request->session()->regenerateToken();
    return redirect('/login');
   }
   public function table()
   {
      $profileData=User::all();
    return view('admin.tables',compact('profileData'));
   }
   public function rating()
   {
    return view('admin.admin_rating');
   }
   public function ratingtable()
   {
      $profileData=rating::all();
    return view('admin.rating_table',compact('profileData'));
   }
   public function createuser()
   {
    return view('admin.createuser');
   }
   

   public function storerating(Request $request)
   { 
      $rating = new Rating; // Change variable name to $rating

      $rating->name = $request->input('name');
      $rating->email = $request->input('email');
      $rating->description = $request->input('description');
      $rating->rating = $request->input('rating');
  
      if ($request->hasfile('profile_image')) {
          $file = $request->file('profile_image');
          $extension = $file->getClientOriginalExtension();
          $filename = time().'.'.$extension;
          $file->move('uploads/ratings/', $filename);
          $rating->profile_image = $filename;
      }
  
      // Save the data to the database
    $rating->save();
    return back()->with('success', 'Ratingss created successfully.');
      }

   public function storeuser(Request $request)
   {
      $validated=$request->validate([
         'name'=>'required',
         'email'=>'required|email',
         'password'=>'required',
         'address'=>'required'
      ]);
      User::create($validated);
    
    return back()->with('success', 'User created successfully.');
    }
    //edit page

    public function editrating(string $id,Request $request)
    { 
       $profileData=Rating::find($id);
       return view('admin.edit_rating_table',compact('profileData'));
    }

    //update page

    public function updaterating(string $id,Request $request)
    {
      $profileData=Rating::find($id);
      $profileData->name=$request->input('name');
      $profileData->email=$request->input('email');
      $profileData->description=$request->input('description');
      $profileData->rating=$request->input('rating');
      if($request->hasfile('profile_image'))
      {
         $destination='uploads/ratings/'.$profileData->image;
         if(File::exists($destination))
         {
            File::delete($destination);
         }
         $file = $request->file('profile_image');
         $extension = $file->getClientOriginalExtension();
         $filename = time().'.'.$extension;
         $file->move('uploads/ratings/', $filename);
         $profileData->profile_image = $filename;
      }

      $profileData->update();
      return back()->with('success', 'Updated successfully.');

    }
    //destroy

    public function deleterating($id)
    {
      $profileData=Rating::find($id);
      $destination='uploads/ratings/'.$profileData->image;
         if(File::exists($destination))
         {
            File::delete($destination);
         }

         $profileData->delete();
         return back()->with('success', 'deleted successfully.');

    }

    //create destination
    public function createdestination()
    {
      return view('admin.destination.create_destination');
    }
    // store destination
     public function storedestination(Request $request)
     {
      $destination=new Destination;
      $destination->name=$request->input('name');
      $destination->description=$request->input('description');
      $destination->requirement=$request->input('requirement'); 
   
      if($request->hasfile('country_image'))
      {
         $file = $request->file('country_image');
          $extension = $file->getClientOriginalExtension();
          $filename = time().'.'.$extension;
          $file->move('uploads/countrys/', $filename);
          $destination->country_image = $filename;
      } 
      $destination->save();
      // $destination->save();
      
      Meta::create([
         'title'=>$request->input('title'),
         'page'=> 'destination_details',
         'meta_keywords'=>$request->input('meta_keywords'),
         'meta_descriptions'=>$request->input('meta_descriptions'),
         'table_id' => $destination->id
      ]);
  

      return back()->with('success','Destination created sucessfully');
      }

      ///
      public function updatedestination(Request $request,$id)
      {
         $profileData=Destination::find($id);
         // $meta=Meta::find($id);
         $profileData->name=$request->input('name');
         $profileData->description=$request->input('description');
         $profileData->requirement=$request->input('requirement');
         if($request->hasfile('country_image'))
         {
            $destination='uploads/countrys/'.$profileData->image;
            if(File::exists($destination))
            {
               File::delete($destination);
            }
            $file = $request->file('country_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/countrys/', $filename);
            $profileData->country_image = $filename;

         }
         $profileData->update();

         $meta=Meta::find($id);
         $meta->update([
            'title'=>$request->input('title'),
            'page'=> 'destination_details',
            'meta_keywords'=>$request->input('meta_keywords'),
            'meta_descriptions'=>$request->input('meta_descriptions'),
            'table_id' => $id
         ]);
         return back()->with('success', 'Updated successfully.');
      }






      //destination table
      public function destinationtable(Request $request)
      {
         $profileData=Destination::all();
         return view('admin.destination.destination_table',compact('profileData'));
      }
      
      //edit destination
      public function editdestination(Request $request,$id)
      {
         $profileData=Destination::with('meta')->find($id);
      // dd($dest->meta);
         return view('admin.destination.edit_destination',compact('profileData'));
      } 
      public function deletedestination($id)
    {
      $profileData=Destination::find($id);
      $destination='uploads/countrys/'.$profileData->image;
         if(File::exists($destination))
         {
            File::delete($destination);
         }
         $profileData->delete();
         return back()->with('success', 'deleted successfully.');

    }
      //create blog
      public function createblog()
      {
         return view('admin.blogs.create_blog');
      }
      public function storeblog(Request $request)
      {
       $blog=new Blog;
       $blog->name=$request->input('name');
       $blog->description=$request->input('description');
       $blog->date=$request->input('date');
       if($request->hasfile('blog_image'))
       {
          $file = $request->file('blog_image');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('uploads/blogs/', $filename);
           $blog->blog_image = $filename;
       }
       $blog->save();

       Meta::create([
         'title'=>$request->input('title'),
         'page'=> 'blog_details',
         'meta_keywords'=>$request->input('meta_keywords'),
         'meta_descriptions'=>$request->input('meta_descriptions'),
         'table_id' => $blog->id
      ]);
       return back()->with('success','blog created sucessfully');
       }



       //blog table
       public function blogtable()
       {
         $profileData=Blog::all();
         return view('admin.blogs.blog_table',compact('profileData'));
       }
       //edit table
       public function editblog(Request $request,string $id)
       {
         $profileData=Blog::with('meta')->find($id);
         return view('admin.blogs.edit_blog',compact('profileData'));
       }
   ///update
   public function updateblog(Request $request,string $id)
   {
      $profileData=Blog::find($id);
      $meta=Meta::find($id);
      $profileData->name=$request->input('name');
      $profileData->description=$request->input('description');
      $profileData->date=$request->input('date');
      if($request->hasfile('blog_image'))
      {
         $destination='uploads/blogs/'.$profileData->image;
         if(File::exists($destination))
         {
            File::delete($destination);

         }

         $file = $request->file('blog_image');
         $extension = $file->getClientOriginalExtension();
         $filename = time().'.'.$extension;
         $file->move('uploads/blogs/', $filename);
         $profileData->blog_image = $filename;


      }
      $profileData->update();
      $meta=Meta::find($id);
      $meta->update([
         'title'=>$request->input('title'),
         'page'=> 'blog_details',
         'meta_keywords'=>$request->input('meta_keywords'),
         'meta_descriptions'=>$request->input('meta_descriptions'),
         'table_id' => $id
         
      ]);
      return back()->with('success','blog updated sucessfully');
      
   }
   public function deleteblog($id)
   {
     $profileData=Destination::find($id);
     $destination='uploads/blogs/'.$profileData->image;
        if(File::exists($destination))
        {
           File::delete($destination);
        }

        $profileData->delete();
        return back()->with('success', 'blog deleted successfully.');

   }

   public function createinstructor()
    {
      return view('admin.instructors.create_instructor');
    }

    public function storeinstructor(Request $request)
    {
     $data=new Instructor;
     $data->name=$request->input('name');
     $data->position=$request->input('position');
     $data->fb=$request->input('fb');
     $data->insta=$request->input('insta');
     if($request->hasfile('instructor_image'))
     {
        $file = $request->file('instructor_image');
         $extension = $file->getClientOriginalExtension();
         $filename = time().'.'.$extension;
         $file->move('uploads/instructors/', $filename);
         $data->instructor_image = $filename;
     }
     $data->save();
     return back()->with('success','Instructor created sucessfully');
     }
     public function instructortable()
     {
       $profileData=Instructor::all();
       return view('admin.instructors.instructor_table',compact('profileData'));
     }
    //update
     public function updateinstructor(Request $request,string $id)
     {
        $profileData=Instructor::find($id);
        $profileData->name=$request->input('name');
        $profileData->position=$request->input('position');
        $profileData->fb=$request->input('fb');
        $profileData->insta=$request->input('insta');

        if($request->hasfile('instructor_image'))
        {
           $destination='uploads/instructors/'.$profileData->image;
           if(File::exists($destination))
           {
              File::delete($destination);
  
           }
  
           $file = $request->file('instructor_image');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('uploads/instructors/', $filename);
           $profileData->instructor_image = $filename;
  
  
        }
        $profileData->update();
        return back()->with('success','instructors updated sucessfully');
        
     }
     //edit page
     public function editinstructor(Request $request,string $id)
     {
       $profileData=Instructor::find($id);
       return view('admin.instructors.edit_instructor',compact('profileData'));
       //delete
     }
     public function deleteinstructor($id)
     {
       $profileData=Instructor::find($id);
       $destination='uploads/instructors/'.$profileData->instructor_image;
          if(File::exists($destination))
          {
             File::delete($destination);
          }
 
          $profileData->delete();
          return back()->with('success', 'deleted successfully.');
 
     }


  /// banner page

  public function createbanner()
  {
    return view('admin.banner.create_banner');
  }
  //store banner

    public function storebanner(Request $request)
    {
     $data=new Banner;
     $data->topheader=$request->input('topheader');
     $data->header=$request->input('header');
     $data->paragraph=$request->input('paragraph');
     $data->link=$request->input('link');
     if($request->hasfile('banner_image'))
     {
        $file = $request->file('banner_image');
         $extension = $file->getClientOriginalExtension();
         $filename = time().'.'.$extension;
         $file->move('uploads/banners/', $filename);
         $data->banner_image = $filename;
     }
     $data->save();
     return back()->with('success','Banner created sucessfully');
     }
     //banner table
     public function bannertable()
     {
       $profileData=Banner::all();
       return view('admin.banner.banner_table',compact('profileData'));
     }
    //edit banner
    public function editbanner(Request $request,string $id)
    {
       $profileData=Banner::find($id);
       return view('admin.banner.edit_banner',compact('profileData'));
    }

    //update banner
    public function updatebanner(Request $request,string $id)
     {
        $profileData=Banner::find($id);
        $profileData->topheader=$request->input('topheader');
        $profileData->header=$request->input('header');
        $profileData->paragraph=$request->input('paragraph');
        $profileData->link=$request->input('link');

        if($request->hasfile('banner_image'))
        {
           $destination='uploads/banners/'.$profileData->banner_image;
           if(File::exists($destination))
           {
              File::delete($destination);
  
           }
  
           $file = $request->file('banner_image');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('uploads/banners/', $filename);
           $profileData->banner_image = $filename;
  
  
        }
        $profileData->update();
        return back()->with('success','Banner updated sucessfully');
        
     }

     //delete banner
     public function deletebanner($id)
     {
       $profileData=Banner::find($id);
       $destination='uploads/banners/'.$profileData->banner_image;
          if(File::exists($destination))
          {
             File::delete($destination);
          }
 
          $profileData->delete();
          return back()->with('success', 'Deleted successfully.');
 
     }

     public function createContact()
     {
      return view('admin.contact.create_contact');
    }

    public function storecontact(Request $request)
    {
     $data=new Contact;
     $data->address=$request->input('address');
     $data->email=$request->input('email');
     $data->phone=$request->input('phone');
     $data->twitter=$request->input('twitter');
     $data->facebook=$request->input('facebook');
     $data->insta=$request->input('insta');
     $data->map=$request->input('map');

     if($request->hasfile('logo'))
     {
        $file = $request->file('logo');
         $extension = $file->getClientOriginalExtension();
         $filename = time().'.'.$extension;
         $file->move('upload/logo/', $filename);
         $data->logo= $filename;
     }
     $data->save();
     return back()->with('success','Contact created sucessfully');
     }

    /// courses page
  
  public function createcourses()
  {
    return view('admin.courses.create_courses');
  }
  //store banner

    public function storecourses(Request $request)
    {
     $data=new Courses;
     $data->course_name=$request->input('course_name');
     $data->description=$request->input('description');
     $data->requirements=$request->input('requirements');
     $data->learn=$request->input('learn');
     $data->duration=$request->input('duration');
     $data->resources=$request->input('resources');
     if($request->hasfile('course_image'))
     {
        $file = $request->file('course_image');
         $extension = $file->getClientOriginalExtension();
         $filename = time().'.'.$extension;
         $file->move('uploads/courses/', $filename);
         $data->course_image = $filename;
     }
     $data->save();

     Meta::create([
      'title'=>$request->input('title'),
      'page'=> 'course_details',
      'meta_keywords'=>$request->input('meta_keywords'),
      'meta_descriptions'=>$request->input('meta_descriptions'),
      'table_id' => $data->id
      ]);

     return back()->with('success','Courses created sucessfully');
     }
     //banner table
     public function coursestable()
     {
       $profileData=Courses::all();
       return view('admin.courses.courses_table',compact('profileData'));
     }
    //edit banner
    public function editcourses(Request $request,string $id)
    {
       $profileData=Courses::with('meta')->find($id);
       return view('admin.courses.edit_courses',compact('profileData'));
    }

    //update courses
    public function updatecourses(Request $request,string $id)
     {
        $data=Courses::find($id);
        $data->course_name=$request->input('course_name');
        $data->description=$request->input('description');
        $data->requirements=$request->input('requirements');
        $data->learn=$request->input('learn');
        $data->duration=$request->input('duration');
        $data->resources=$request->input('resources');

        if($request->hasfile('course_image'))
        {
           $destination='uploads/courses/'.$data->course_image;
           if(File::exists($destination))
           {
              File::delete($destination);
  
           }
  
           $file = $request->file('course_image');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('uploads/courses/', $filename);
           $data->course_image = $filename;
  
        }

        $data->update();
        $meta=Meta::find($id);
        $meta->update([
           'title'=>$request->input('title'),
           'page'=> 'course_details',
           'meta_keywords'=>$request->input('meta_keywords'),
           'meta_descriptions'=>$request->input('meta_descriptions'),
           'table_id' => $id
        ]);
        return back()->with('success','Create updated sucessfully');
        
     }

     //delete banner
     public function deletecourses($id)
     {
       $profileData=Courses::find($id);
       $destination='uploads/courses/'.$profileData->course_image;
          if(File::exists($destination))
          {
             File::delete($destination);
          }
 
          $profileData->delete();
          return back()->with('success', 'Deleted successfully.');
 
     }
      

 ///create branch
     public function createbranch()
  {
    return view('admin.branch.create_branch');
  } 


  
  public function storebranch(Request $request)
  {
   $data=new Branch;
   $data->branch_name=$request->input('branch_name');
   $data->location=$request->input('location');
   $data->email=$request->input('email');
   $data->phone=$request->input('phone');
   $data->map=$request->input('map');
   
   $data->save();
   return back()->with('success','Branches created sucessfully');
   }
      
       //banner branch
     public function branchtable()
     {
       $profileData=Branch::all();
       return view('admin.branch.branch_table',compact('profileData'));
     }



      //update branch
    public function updatebranch(Request $request,string $id)
    {
       $data=Branch::find($id);
       $data->branch_name=$request->input('branch_name');
       $data->location=$request->input('location');
       $data->email=$request->input('email');
       $data->phone=$request->input('phone');
       $data->map=$request->input('map');

       $data->update();
       return back()->with('success','Branch updated sucessfully');
       
    }
     
    //edit branch page
    public function editbranch(Request $request,string $id)
    {
       $profileData=Branch::find($id);
       return view('admin.branch.edit_branch',compact('profileData'));
    }

    public function deletebranch(Request $request,string $id)
    {
      $profileData=Branch::find($id);
      $profileData->delete();
      return back()->with('succes','Branch Deleted sucessfully');
    }

     ///create division
     public function createdivision()
  {
    return view('admin.division.create_division');
  } 
   

  //store division
  public function storedivision(Request $request)
  {
   $data=new Division;
   $data->total_courses=$request->input('total_courses');
   $data->total_students=$request->input('total_students');
   $data->total_instructors=$request->input('total_instructors');
   $data->satisfaction_rate=$request->input('satisfaction_rate');
   $data->save();
   return back()->with('success','Division created sucessfully');
   }
    
    //division table
    public function divisiontable()
    {
      $profileData=Division::all();
      return view('admin.division.division_table',compact('profileData'));
    }

    public function editdivisionpage($id)
    {
      $profileData=Division::find($id);
      return view('admin.division.edit_division',compact('profileData'));
    }


    // edit table

    public function updatedivision( Request $request ,$id)
    {

      $data=Division::find($id);
      $data->total_courses=$request->input('total_courses');
      $data->total_students=$request->input('total_students');
      $data->total_instructors=$request->input('total_instructors');
      $data->satisfaction_rate=$request->input('satisfaction_rate');
      $data->update();
      return back()->with('success','Division created sucessfully');

    }
     
    public function deletedivision($id)
    {

       $data=Division::find($id);
       $data->delete();

       return back()->with('sucess','Division Deleted');

    }


    //services Page
    
    public function createservice()
    {
      return view('admin.services.create_services');
    } 
    

     //store service
  public function storeservice(Request $request)
  {
   $data=new Service;
   $data->service_name=$request->input('service_name');
   $data->description=$request->input('description');
   if($request->hasfile('service_image'))
   {
    $file=$request->file('service_image');
    $extension=$file->getClientOriginalExtension();
    $filename=time().'.'.$extension;
    $file->move('uploads/services/',$filename);
    $data->service_image=$filename;


   }
   $data->save();
   Meta::create([
      'title'=>$request->input('title'),
      'page'=> 'service_details',
      'meta_keywords'=>$request->input('meta_keywords'),
      'meta_descriptions'=>$request->input('meta_descriptions'),
      'table_id' => $data->id
   ]);
   return back()->with('success','Service created sucessfully');
   }
   
    
   //division table
   public function servicetable()
   {
     $profileData=Service::all();
     return view('admin.services.service_table',compact('profileData'));
   } 


   //edit service

   public function editservice(Request $request,string $id)
    {
       $profileData=Service::with('meta')->find($id);
       return view('admin.services.edit_service',compact('profileData'));
    }

    //update service
    public function updateservice(Request $request,string $id)
     {
        $data=Service::find($id);
        $data->service_name=$request->input('service_name');
        $data->description=$request->input('description');
        if($request->hasfile('service_image'))
        {
           $destination='uploads/services/'.$data->service_image;
           if(File::exists($destination))
           {
              File::delete($destination);
  
           }
  
           $file = $request->file('service_image');
           $extension = $file->getClientOriginalExtension();
           $filename = time().'.'.$extension;
           $file->move('uploads/services/', $filename);
           $data->service_image = $filename;
  
        }

        $data->update();

        $meta=Meta::find($id);
        $meta->update([
           'title'=>$request->input('title'),
           'page'=> 'service_details',
           'meta_keywords'=>$request->input('meta_keywords'),
           'meta_descriptions'=>$request->input('meta_descriptions'),
           'table_id' => $id
        ]);
        return back()->with('success','Services updated sucessfully');
        
     }
    

      //delete service
      public function deleteservice($id)
      {
        $profileData=Service::find($id);
        $destination='uploads/services/'.$profileData->service_image;
           if(File::exists($destination))
           {
              File::delete($destination);
           }
  
           $profileData->delete();
           return back()->with('success', 'Deleted successfully.');
  
      }
       


}
