<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css.map')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Document</title>
    <style>
h1{
font-size: 2rem;
align-content: center;
margin: auto;
margin-bottom: 10px;
text-align: center;

}

.container-add{
    margin:auto;
    height:max-content;
    border: 2px solid black;
    padding: 2px;
    width: 80vw;
    display: block;
}


.conrainer :last-of-type{

background:  #5F9EA0;
color: white;
font-weight: bold;

}

.btn-person{
background:  #5F9EA0;
}

.contain,.task-list{
border: 1px solid #696969;

}

.buton{
justify-content: space-around;
align-items:  center;
}

img{
width: 20px;
height: fit-content;
margin-left: 1px;
margin-right: 1px;


}

.btn-container{
display: flex;
justify-content: space-around;
align-items: center;
}

.btn-container .col{
width: 30%;
margin-left: 4%;
}

.col{
font-family: Arial, Helvetica, sans-serif;
font-size: 20px;
font-weight: bold;
}

button,input{

}


.btn-link,.btn-link:hover{
  text-decoration: none;
  color: white;
}
</style>
</head>
<body >
<h1>TodoInput</h1>

<div class="container  contain py-3 mb-3">

<div class="row">
<div class="col ">
<form class="form-inline" method="POST" action="{{route('store')}}">
@csrf
<div class="input-group mb-2 mr-sm-2">
  <div class="input-group-prepend">
    <div class="input-group-text btn btn-person"><img src="{{asset('img/plus.svg')}}" ></div>
  </div>
 
 
 

 <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Add new task" name="task-content" >;
  

</div>
   
<button type="submit" class="btn btn-person mb-2 w-100 text-light"> Add new task</button>
</form>
</div>
</div>

</div>

<h1>TodoList</h1>
<div class="container mb-5 buton">
<div class="row d-flex w-100 btn-container">
<div class="col  btn btn-person text-light" id="btn-all"><a href="{{route('home')}}"  class="btn-link">All</a></div>
<div class="col btn btn-person text-light" id="btn-done">Done</div>
<div class="col  btn btn-person text-light " id="btn-todo">Toto</div>
</div>  

</div>
<div class="container task-list mb-5">
@foreach ($tasks as $task)
<div class="row">
<div class="col md-7" class="task-display" data-target="">{{$task->title}}</div>
<div class="col md-3"> 

    <div class="row d-flex justify-content-center btn-container">
        <div class="col btn btn-person-transparent"> <input type="checkbox" class="check" onclick="checkAction()"></div>
        <div class="col btn btn-yellow-transparent"><a href="{{route('edit',$task->id)}}" name="changelink"><img src="{{asset('img/change.svg')}}"></a></div>
        <div class="col btn btn-danger-transparent"><a href="{{route('delete',$task->id)}}"><img src="{{asset('img/delete.svg')}}"></a></div>
    </div>
</div>
</div>
@endforeach
</div>
<script>

function checkAction()
{
  let  text= document.getElementsByClassName('task-display');

    document.getElementsByClassName('check').forEach(element => {
        if (document.getElementsByClassName('check').checked==true){
          text.style.color="red";
          text.style.textDecoration="line-through";
        }

        else
{

    text.style.color="black";
    text.style.textDecoration="none";
   
}
    });
  
}

</script>

<div class="container">
<div class="row">
<div class="col btn btn-danger me-5 "><a href="{{route('deleteDone')}} " class="btn-link">Delete done tasks</a></div>
<div class="col btn btn-danger me-5 btn-link"><a href="{{route('deleteAll')}} " class="btn-link"> Delete all tasks</a></div>
</div>
</div>

</script>
<script src="{{ asset('js/bootstrap.bundle.js')}}"></script>
<script src="{{ asset('js/bootstrap.bundle.js.map')}}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/dodolist.js')}}"></script>
</body>
</html>