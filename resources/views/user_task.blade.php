<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Validation Form</title>
</head>
<body>
    <form action="{{ url('user_task') }}" method="POST">
        @csrf
        <div class="container-sm mt-5 mb-5 bg-secondary p-3">
            <label for="task_name" class="form-label">Task Name</label>
            <input class="form-control" type="text" id="name" name="task_name" value="{{old ('task_name') }}">
            @error ('task_name')
            <div class="alert alert-danger mt-4 ">{{$message}}</div>
            @enderror
        </div>
    <div class="container-sm  mt-2 ml-4 mb-5 bg-secondary p-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status">
            <option value="">--</option>
            <option value="Pending">Pending</option>
            <option value="Completed">Completed</option>
            <option value="On Process">On Process</option>
        </select>
        @error('status')
            <div class="alert alert-danger mt-4 ">{{$message}}</div>
        @enderror    
    </div>
    <div class="container-sm mt-2 ml-4 mb-3 mb-5 bg-secondary p-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control mb-3 " name="description" id="description" style="width:100%", rows="5"></textarea>
    </div>
    <div class="container-sm  mt-2 ml-4 mb-5 mb-4 bg-secondary p-3">
        <label for="Deadline" class="form-label">Deadline</label>
        <input class="form-control" type="date" id="deadline" name="deadline" value="{{ old('deadline')}}">
        @error ('deadline')
            <div class="alert alert-danger mt-4 ">{{$message}}</div>
         @enderror
    </div>
    <div class="container-sm ">
    <button type="submit" class="btn btn-primary p-2">Submit</button>
    </div>
    </form>

    
    @if (session('success'))
        <div class="alert alert-success mt-3 ml-5 mr-5" >{{ session('success') }}</div>
    @endif 
    
</body>
</html>