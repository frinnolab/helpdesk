@extends('layout.app')
@section('content')

<div class="admin">
    <div class="hello card">
        <h3 class="hlltxt0" >{{$data['company']->fullname}}</h3>
        <h3 class="hlltxt0">{{$data['company']->address}}</h3>
        <h3 class="hlltxt0">{{$data['company']->contact}}</h3>
        <h3 class="hlltxt0">{{$data['user']->fullname}}</h3>
        <h3 class="hlltxt0">{{$data['user']->email}}</h3>
        <div class="quick-actions">
                        <!-- Dropdown Trigger -->
            <a class='dropdown-trigger btn btn-sttngs' href='#' data-target='dropdown2'>More Settings</a>

            <!-- Dropdown Structure -->
            <ul id='dropdown2' class='dropdown-content'>
                <li>
                  <a href="#!" >New Role</a>
                </li>
                <li>
                  <a href="#!" >New Member</a>
                </li>

                <li class="divider" tabindex="-1"></li>
                <li>
                  <a href="#!">New Service</a>
                </li>
            </ul>

        </div>
    </div>

    <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
        <li class="tab"><a class="active" href="#tickets">Tickets</a></li>
        <li class="tab"><a  href="#Services">Services</a></li>
        <li class="tab"><a href="#Team">Team</a></li>
      </ul>

      <div id="tickets" class="col s12">
          <div class="table-list">
              {{-- Tickects Tab --}}
              <div class="table-actions card">

            </div>

              <table class="highlight">
                <thead>
                  <tr>
                      <th><a class='btn btn-sttngs' href='#' >New Ticket</a></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                  </tr>
                </thead>
                <thead>
                  <tr>
                      <th>Ticket No</th>
                      <th>Description</th>
                      <th>Service</th>
                      <th>Priority</th>
                      <th>Status</th>
                      <th>View</th>
                      <th>Delete</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>TCN001</td>
                    <td>Failed Login on to Sage</td>
                    <td>SAGE 300 2020</td>
                    <td>High</td>
                    <td>Pending</td>
                    <td>View</td>
                    <td>Delete</td>
                  </tr>
                  <tr>
                    <td>TCN002</td>
                    <td>Failed Login on to portal</td>
                    <td>Delivery portal</td>
                    <td>Minor</td>
                    <td>Resolved</td>
                    <td>View</td>
                    <td>Delete</td>
                  </tr>

                </tbody>
              </table>

              {{-- Pagination --}}
              <ul class="pagination">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
              </ul>

              {{-- Pagination End --}}
          </div></div>

          {{-- COMPANY TAB --}}
      <div id="Services" class="col s12">
            <div class="table-list">
                <div class="table-actions card">

                </div>
                <table class="highlight">
                    <thead>
                        <tr>
                            <th><a class='btn btn-sttngs' href='#'>Add Service</a></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                      </thead>
                    <thead>
                      <tr>
                          <th>Name</th>
                          <th>Modules</th>
                          <th>Manage</th>
                          <th>Delete</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>Sage 300 2020</td>
                        <td>5</td>
                        <td>Manage</td>
                        <td>Delete</td>
                      </tr>
                      <tr>
                        <td>Poin of Sale</td>
                        <td>1</td>
                        <td>Manage</td>
                        <td>Delete</td>
                      </tr>


                    </tbody>
                  </table>


              {{-- Pagination --}}
              <ul class="pagination">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
              </ul>

              {{-- Pagination End --}}
            </div>
        </div>


      <div id="Team" class="col s12">
        <div class="table-list">
            <div class="table-actions card">


            </div>
            <table class="highlight">
                <thead>
                    <tr>
                        <th><a class='btn btn-sttngs' href='#'>Add Member</a></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                  </thead>
                <thead>
                <thead>
                  <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Role</th>
                      <th>Manage</th>
                      <th>Delete</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>John Doe</td>
                    <td>jdoe@gmail.com</td>
                    <td>0785000532</td>
                    <td>Implementation</td>
                    <td>Manage</td>
                    <td>Delete</td>
                  </tr>
                  <tr>
                    <td>Slim Shaddy</td>
                    <td>shadyslim@gmail.com</td>
                    <td>0785123785</td>
                    <td>Development</td>
                    <td>Manage</td>
                    <td>Delete</td>
                  </tr>

                </tbody>
              </table>
        </div>
        </div>


</div>
@endsection

@push('styles')
<style>
.admin{
    padding: 10px;
    background-color: white;
    max-height: 100%;
    display: flex;
    flex-direction: column;
}

.hello{
    max-width: 100%;
    margin-bottom: 10px;
    background-color: white;
    display: flex;
    color: darkgrey;
    justify-content: space-evenly;
    align-items: center;
}

.hlltxt0{
    font-size: 16px;
}
.hlltxt1{
    font-size: 10px;
}

.btn-sttngs{
  background-color: var(--hd_blu_3);
}

.tabs{
    display: flex;
    align-items: center;
    justify-content: space-around;
}
.tab{
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    max-width: 100%;
    background-color: whitesmoke;
    color: whitesmoke;
    border-bottom: 3px solid white;
    margin: 10px;
}
.table-list{
    display: flex;
    flex-direction: column;
}

.table-actions{
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    background-color: whitesmoke;
}

thead{
    background-color: whitesmoke;

}

th{
    font-size: 16px;
    font-weight: bold;
}
td{
    font-size: 14px;
}

.pagination{
    margin-top: 10px;
}
/* .tab{
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
} */

</style>
@endpush


@push('scripts')
<script>
    $(document).ready(function(){
        $('.dropdown-trigger').dropdown();
        $('.tabs').tabs();
        $('.modal').modal();
    });
</script>
@endpush
