<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    private $course;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Course $course)
    {
       $this->course = $course;
    }

    public function index(){
        return $this->course->paginate(10);
    }

    public function show($course){
        return $this->course->findOrfail($course);
    }
    
    public function store(Request $request){
        //return $this->course->find($course);
        //return $request->all();
        $this->course->create($request->all());
        
        //mensagem de criação
        return response()
                ->json(['data' => [
                            'message' => 'Curso foi Criado com sucesso!']
                        ]);
    }
    

    public function update($course, Request $request){
        
        $course = $this->course->find($course);
        
        $course ->update($request->all());

        return response()
                ->json(['data' => [
                    'message' => 'Curso foi atualizado com sucesso!']
                ]);
    }
 
    public function destroy($course){
        
        $course = $this->course->find($course);
        
        $course ->delete();

        return response()
        ->json(['data' => [
                'message' => 'Curso foi removido com sucesso!']
            ]);
    }
    
    
}
