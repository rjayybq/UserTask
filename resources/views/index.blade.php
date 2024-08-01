<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover table-primary">
                    <thead>
                        <tr>
                            <th>Task Name</th>
                            <th>Status</th>
                            <th>Description</th>
                            <th>Deadline</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user_tasks as $user_task)
                        <tr>
                            <td> {{ $user_task-> task_name }} </td>
                            <td> {{ $user_task-> status }} </td>
                            <td> {{ $user_task-> description }} </td>
                            <td> {{ $user_task-> deadline }} </td>
                            <td>
                                <a href="{{ url('user_tasks', $user_task->id) }}/edit" class="btn btn-outline-success">Edit</a>
                                <form action=" {{  url('user_tasks', $user_task->id) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Sure kana ba?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="8" class="txt-right">
                                {!! $user_tasks->links() !!}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>