<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Person') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 ">
                     <h2 class="text-center bg-dark text-white p-4">Add Person</h2>
                     <form action="/Person" method="POST" >
                        @csrf
                        <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                        <label for="email">Name :</label>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                        <label for="email">Email</label>
                        </div> 
                        <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="age" placeholder="Enter age" name="age">
                        <label for="email">Age</label>
                        </div>
                         <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
                        <label for="email">Mobile</label>
                        </div>
                         <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
                        <label for="email">City</label>
                        </div>                       
                        <button type="submit" class="btn btn-primary">Add Person</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
