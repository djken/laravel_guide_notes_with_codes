@extends('layout')

@section('title', 'Customer List')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Customers</h1> 
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">
            <form action="customers" method="POST">
                <label for="name">Name:</label>
                <div class="form-group">
                    <input type="text" name="name" id="" value="{{ old('name') }}" class="form-control" >
                    <div>{{ $errors->first('name') }}</div>
                </div> 
                
                <label for="email">Email:</label>
                <div class="form-group">
                    <input type="text" name="email" id="" value="{{ old('email') }}" class="form-control">
                    <div>{{ $errors->first('email') }}</div>
                </div> 
                
                <div class="form-group">
                    <label for="active">Status:</label>
                    <select name="active" id="inactive" class="form-control">
                        <option value="" disabled>Select Customer</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="company_id">Company</label>
                    <select name="company_id" id="company_id" class="form-control">
                        @foreach ($companies as $company)
                            <option value="{{ $company->id }}"> {{ $company->name }} </option>
                        @endforeach
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary">Add Customer</button>
                @csrf
            </form>
        </div>
    </div>
    
    <hr>
    <div class="row">
        <div class="col-6">
            <h3>Active Customers</h3>
            <ul>
                @foreach ($activeCustomers as $activeCustomer)
                    <li>{{ $activeCustomer->name }} <span class="text-muted" >({{ $activeCustomer->company->name}})</span> </li>
                @endforeach
            </ul>  
        </div>
        
        <div class="col-6">
            <h3>Inactive Customers</h3>
            <ul>
                @foreach ($inactiveCustomers as $inactiveCustomer)
                    <li>{{ $inactiveCustomer->name }} <span class="text-muted" >({{ $inactiveCustomer->company->name}})</span>
                    </li>
                @endforeach
            </ul>  
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            @foreach ($companies as $company)
                <h3> {{ $company->name }} </h3>

                @foreach ($company->customers as $customer)
                    <ul>
                        <li> {{ $customer->name }} </li>
                    </ul>
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
