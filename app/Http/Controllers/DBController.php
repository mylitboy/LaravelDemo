<?php
/**
 * Created by PhpStorm.
 * User: mylitboy
 * Date: 2017-4-17
 * Time: 20:49
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    public function stu()
    {
//        return "hello";

        //查询
        $students = DB::select('select * from student');
        var_dump($students);

        //插入
//        $bool = DB::insert('insert into student(name,age) values(?,?)',
//            ['test1',123]);
//        var_dump($bool);

        //更新
//        $num = DB::update('update student set name = ? where id<?',
//            ['test2',1003]);
//        var_dump($num);

        //查询
//        $students =   DB::select('select * from student where id<?',
//            [1005]);
//        dd($students);

//        //删除
//        $num = DB::update('delete from student where id<?',
//            [1002]);
//        var_dump($num);
    }

    // 使用查询构造器添加数据
    public function pdo()
    {
//        //插入
//        $bool = DB::table('student')->insert(
//            ['name' => 'cheng', 'age' => 18]
//        );
//        var_dump($bool);
//
//        //插入并返回ID
//        $id = DB::table('student')->insertGetId(
//            ['name' => 'cheng', 'age' => 18]
//        );
//        var_dump($id);
//
//        //批量插入
//        $bool = DB::table('student')->insert([
//            ['name' => 'cheng', 'age' => 18],
//            ['name' => 'wei', 'age' => 18]
//        ]);
//        var_dump($bool);

//        //批量插入
//        $bool = DB::table('student')->insert([
//            ['id'=>1101,'name' => 'cheng', 'age' => 18],
//            ['id'=>1102,'name' => 'wei', 'age' => 18]
//        ]);
//        var_dump($bool);

        //查询
        $students = DB::select('select * from student');
        dd($students);
    }

    // 使用查询构造器修改数据
    public function query2()
    {
        //修改
//        $num = DB::table('student')
//            ->where('id', 1003)
//            ->update(['age' => 30]);
//        var_dump($num);

//        //自增
//        $num2 = DB::table('student')->increment('age');
//        $num2 = DB::table('student')->increment('age'，3);
//        var_dump($num2);

        //自减
//        $num2 = DB::table('student')->decrement('age');
//        $num2 = DB::table('student')->decrement('age',5);
//        var_dump($num2);

//        //自增带条件
//        $num2 = DB::table('student')
//            ->where('id',1002)
//            ->increment('age',4);
//        var_dump($num2);
//
//        //自增时，修改其他字段
//        $num2 = DB::table('student')
//            ->where('id',1002)
//            ->increment('age',4,['name'=>'hehe']);
//        var_dump($num2);

        //查询
        $students = DB::select('select * from student');
        dd($students);
    }

    // 使用查询构造器删除数据
    public function query3()
    {
        //删除
//        $num = DB::table('student')
//            ->where('id',1003)
//            ->delete();
//        var_dump($num);
        //删除
//        $num = DB::table('student')
//            ->where('id','>=',1009)
//            ->delete();
//        var_dump($num);

//        //清空数据（谨慎使用）
//        DB::table('student')->truncate();

        //查询
        $students = DB::select('select * from student');
        dd($students);
    }

    public function query4()
    {

        //获取表的所有数据
//        $students = DB::table('student')->get();
//        dd($students);

//        //获取第一条
//        $student = DB::table('student')->first();
//        dd($student);

//        //获取第一条(可对结果排序后获取第一条）
//        $student = DB::table('student')
//            ->orderBy('id','desc')
//            ->first();
//        dd($student);


//        $student = DB::table('student')
//            ->where('id','>=',1006)
//            ->get();
//        dd($student);

//        $student = DB::table('student')
//            ->whereRaw('id>=? and age>?',[1006,10])
//            ->get();
//        dd($student);

//  array:7 [▼
//  0 => "hehe"
//  1 => "cheng"
//  2 => "cheng"
//  3 => "cheng"
//  4 => "cheng"
//  5 => "cheng"
//  6 => "wei"
//]
//        $student = DB::table('student')
//            ->pluck('name');
//        dd($student);

////array:7 [▼
////  1002 => "hehe"
////  1004 => "cheng"
////  1005 => "cheng"
////  1006 => "cheng"
////  1007 => "cheng"
////  1008 => "cheng"
////  1009 => "wei"
////]
//        $student = DB::table('student')
//            ->lists('name','id');
//        dd($student);

//        //选择查询的字段
//        $student = DB::table('student')
//            ->select('id','name','age')
//            ->get();
//        dd($student);

//        //chunk 分段获取数据
//        echo '<pre>';
//        DB::table('student')
//            ->chunk(2,function($students){
//                //一次查两条，直到查询结束为止。
//                var_dump($students);
////                return false;
//            });

        //chunk 分段获取数据
        echo '<pre>';
        DB::table('student')
            ->chunk(2,function($students){
                //一次查两条，直到查询结束为止。
                var_dump($students);
                //如果加入return false，就停止。
//                if(.....){return false}
                return false;
            });

    }
}