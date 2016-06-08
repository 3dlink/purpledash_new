<!-- resources/views/tasks.blade.php -->

@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Test Form -->
        <form action="{{ url('test') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Test Name -->
            <div class="form-group">
                <label for="test" class="col-sm-3 control-label">Nombre</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="test-name" class="form-control">
                </div>
            </div>

            <!-- Test Edad -->
            <div class="form-group">
                <label for="test" class="col-sm-3 control-label">Edad</label>

                <div class="col-sm-6">
                    <input type="text" name="edad" id="test-edad" class="form-control">
                </div>
            </div>

            <!-- Add Test Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Test
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Current tests -->
    @if (count($tests) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tests
            </div>

            <div class="panel-body">
                <table class="table table-striped test-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Test</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($tests as $test)
                            <tr>
                                <!-- Test Name -->
                                <td class="table-text">
                                    <div>{{ $test->name }}</div>
                                </td>

                                <td class="table-text">
                                    <div>{{ $test->edad }}</div>
                                </td>

                                <td>
                                    <form action="{{ url('test/'.$test->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

    <!-- TODO: Current Tasks -->
@endsection