<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Category;
use App\Admin\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    function url(){
        $href=request()->href;
//        echo $href;

    }
    function content($id){
        $data=News::where('n_id',$id)->first();

        return view('admin/new/content',['data'=>$data]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=News::join('category','news.cate_id','=','category.cate_id')->paginate(2);
//        dd($data);
        return view('admin/new/index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cateInfo=Category::get();
        return view('admin/new/create',['cateInfo'=>$cateInfo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=request()->except('_token');
        if ($request->hasFile('n_img')) {
            $post['n_img']=$this->upload('n_img');
        }
        $admin=session('admin');
        $post['n_name']=$admin['admin_name'];
        $post['create_time']=time();
//        dd($post);
        $res=News::create($post);
        if($res){
            return redirect('admin/new/index');
        }
    }

    function upload($filename){
        if(request()->file('n_img')->isValid()){
            $photo = request()->file('n_img');
            $store_result = $photo->store('photo');
//            dd($store_result);

            return $store_result;
        }
        exit('未获取到上传文件或上传过程出错');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
