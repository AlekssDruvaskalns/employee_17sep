<x-layout>
    <div class="employee-container">
        <a href="{{route('employee.create')}}" class ="new_employee-btn">

        </a>
        <div class="employees">
            @foreach($employees as $employee)
                <div class="employee">
                    <div class ="employee-body">
                        {{$employee->name}}
                    </div>
                    <div class="buttons">
                        <a href="{{route('employee.show', $employee)}}" class="employee-show-button">View</a>
                        <a href="{{route('employee.edit', $employee)}}" class="employee-edit-button">Edit</a>
                        <button class="delete">Delete</button>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</x-layout>
 
