@extends('layout.app')
@section('content')

<div class="admin">
    <div class="hello card">
        <h1 class="hlltxt0" >Company Name</h1>
        <h3 class="hlltxt1">Company Address</h3>
        <h3 class="hlltxt1">Company Contacts</h3>
    </div>
    <div class="tab">
        <p class="tab-itm">Tickets</p>
        <p class="tab-itm">Services</p>
        <p class="tab-itm">Team</p>
        {{-- <p class="tab-itm">SytemAdmin UI</p>
        <p class="tab-itm">SytemAdmin UI</p>
        <p class="tab-itm">SytemAdmin UI</p> --}}
    </div>
    <div class="tab tab-content">
        <table>
            <thead>
                <th>Ticket ID</th>
                <th>Description</th>
                <th>Company</th>
                <th>Service</th>
                <th>Priority</th>
                <th>Status</th>
                <th>View</th>
                <th>Delete</th>
            </thead>
                <tr>
                    <td>TCN001</td>
                    <td>Failed login</td>
                    <td>ABC ltd</td>
                    <td>Addon</td>
                    <td>Normal</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <td>TCN001</td>
                    <td>Failed login</td>
                    <td>ABC ltd</td>
                    <td>Addon</td>
                    <td>Normal</td>
                    <td>Pending</td>
                </tr>

            <tbody>

            </tbody>
        </table>

    </div>

</div>
@endsection

@push('styles')
<style>
.admin{
    padding: 10px;
    background-color: white;
    max-height: 100%;
}

.hello{
    max-width: 100%;
    max-height: 20%;
    padding: 10px;
    margin-bottom: 10px;
    background-color: white;
    display: flex;
    flex-direction: column;
    color: darkgrey;
    align-items: center;
    justify-content: center;
    object-fit: contain;

}

.hlltxt0{
    font-size: 16px;
}
.hlltxt1{
    font-size: 10px;
}

.tab{
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    max-width: 100%;
    background-color: whitesmoke;
}

.tab-itm{
    margin: 10px;
    border-bottom: 3px solid var(--hd_warn);
    padding: 10px;
}

.tab-content{
    max-height: 500vh;
}

</style>
@endpush
