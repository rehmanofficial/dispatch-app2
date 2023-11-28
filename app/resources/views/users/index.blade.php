@extends('layouts.app')

@section('content')
<div class="content">

      <!-- Start::main-content -->
      <div class="main-content">

        <!-- Page Header -->
        <div class="block justify-between page-header md:flex">
            <div>
                <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Users</h3>
            </div>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-sm">
                  <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                    Home
                    <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
                  </a>
                </li>
                <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                    Users
                </li>
            </ol>
        </div>
        <!-- Page Header Close -->
        
        <!-- Start::row-3 -->
        <div class="grid grid-cols-12 gap-x-6">
          <div class="col-span-12">
            <div class="box">
              <div class="box-header">
                <div class="flex">
                  <h5 class="box-title my-auto">All Users</h5>
                  <div class="hs-dropdown ti-dropdown block ltr:ml-auto rtl:mr-auto my-auto">                    
                    <button type="button" class="hs-dropdown-toggle ti-dropdown-toggle rounded-sm p-1 px-3 !border border-gray-200 text-gray-400 hover:text-gray-500 hover:bg-gray-200 hover:border-gray-200 focus:ring-gray-200  dark:hover:bg-black/30 dark:border-white/10 dark:hover:border-white/20 dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                      Actions <i class="ti ti-chevron-down"></i></button>
                    <div class="hs-dropdown-menu ti-dropdown-menu">
                      <a class="ti-dropdown-item" href="javascript:void(0)">Download PDF</a>
                      <a class="ti-dropdown-item" href="javascript:void(0)">Export CSV</a>
                      <a class="ti-dropdown-item" href="javascript:void(0)">Add a new User</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-body">
                <div class="table-bordered rounded-sm ti-custom-table-head overflow-auto">
                  <table class="ti-custom-table ti-custom-table-head whitespace-nowrap">
                    <thead class="bg-gray-50 dark:bg-black/20">
                      <tr class="">
                        <th scope="col" class="dark:text-white/80">S.no</th>
                        <th scope="col" class="dark:text-white/80">Name</th>
                        <th scope="col" class="dark:text-white/80">Email</th>
                        <th scope="col" class="dark:text-white/80 min-w-[300px]">Address</th>
                        <th scope="col" class="dark:text-white/80">Phone Number</th>
                        <th scope="col" class="dark:text-white/80">Status</th>
                        <th scope="col" class="dark:text-white/80">Alias</th>
                        <th scope="col" class="dark:text-white/80">Role</th>
                        <th scope="col" class="dark:text-white/80">Action</th>
                      </tr>
                    </thead>
                    <tbody class="">
                        @forelse ($users as $user)
                        <tr class="">
                            <td>{{ $loop->iteration }}</td>
                            <td>
                              <div class="flex space-x-3 rtl:space-x-reverse w-full">
                                <div class="block w-full my-auto">
                                  <span class="block text-sm font-semibold text-gray-800 dark:text-gray-300 min-w-[180px] truncate">{{ $user->name }}</span>
                                </div>
                              </div>
                            </td>
                            <td class="!text-success font-semibold text-base">{{ $user->email }}</td>
                            <td>
                              <div class="flex space-x-3 rtl:space-x-reverse text-start">
                                <div class="block my-auto">
                                  <p class="block text-sm font-semibold my-auto text-gray-800 dark:text-white">{{ $user->name }}</p>
                                </div>
                              </div>
                            </td>
                            <td class="text-base">{{ $user->name }}</td>
                            <td><span class="truncate whitespace-nowrap inline-block py-1 px-3 rounded-full text-xs font-medium bg-success/10 text-success/80">Active</span>
                            </td> 
                            <td class="text-base">-</td>   
                            <td class="text-base">
                            @forelse ($user->getRoleNames() as $role)
                            <span class="badge bg-primary">{{ $role }}</span>
                            @empty
                            @endforelse
                            </td> 
                                                  
                            <td class="font-medium space-x-2 rtl:space-x-reverse">
                              <div class="hs-tooltip ti-main-tooltip">
                                <a href="{{ route('users.show', $user->id) }}" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-primary">
                                  <i class="ti ti-eye"></i>
                                  <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                    View
                                  </span>
                                </a>
                              </div>
                              
                            @if (in_array('Super Admin', $user->getRoleNames()->toArray() ?? []) )
                                @if (Auth::user()->hasRole('Super Admin'))
                                <div class="hs-tooltip ti-main-tooltip">
                                    <a href="{{ route('users.edit', $user->id) }}" class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                    <i class="ti ti-pencil"></i>
                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                        Edit
                                    </span>
                                    </a>
                                </div>
                                @endif
                            @else
                                @can('edit-user')
                                <div class="hs-tooltip ti-main-tooltip">
                                    <a href="{{ route('users.edit', $user->id) }}" class="customer-edit m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-secondary">
                                    <i class="ti ti-pencil"></i>
                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                        Edit
                                    </span>
                                    </a>
                                </div>
                                @endcan

                            @can('delete-user')
                                @if (Auth::user()->id!=$user->id)
                                <div class="hs-tooltip ti-main-tooltip">
                                  <form action="{{ route('users.destroy', $user->id) }}" method="post" id="del-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Do you want to delete this user?');" class="m-0 hs-tooltip-toggle relative w-8 h-8 ti-btn rounded-full p-0 transition-none focus:outline-none ti-btn-soft-danger">
                                    <i class="ti ti-trash"></i>
                                    <span class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 bg-gray-900 text-xs font-medium text-white shadow-sm dark:bg-slate-700" role="tooltip">
                                        Delete
                                    </span>
                                  </button>
                                  </form>
                                </div>
                                @endif
                            @endcan
                          @endif
                            </td>
                        </tr>
                        @empty
                    <td colspan="5">
                        <span class="text-danger">
                            <strong>No User Found!</strong>
                        </span>
                    </td>
                @endforelse                                                 
                    </tbody>
                  </table>

                {{ $users->links() }} 
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End::row-3 -->

      </div>
      <!-- Start::main-content -->

    </div>
    
@endsection