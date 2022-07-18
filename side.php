<?php

if($_SESSION['EMPLOYEE_ID'] != '14352')
{
echo '<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

    <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-edit"></i>
      <p>
        Parcel Utilities
      <i class="fas fa-angle-left right"></i>
      </p>
    </a>

    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="register.php" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Register</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="claim.php" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Claim</p>
        </a>
      </li>
    </ul>

  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-arrow-circle-right"></i>
      <p>
        Parcel Status
        <i class="fas fa-angle-left right"></i>
      </p>
    </a>

    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="arrived.php" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>New Arrived</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="collected.php" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Collected</p>
        </a>
      </li>

      <li class="nav-item">
        <a href="pending.php" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Pending</p>
        </a>
      </li>';
}
else 
{
    echo '<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-user"></i>
          <p>
            User Utilities
          <i class="fas fa-angle-left right"></i>
          </p>
        </a>

        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="register_user.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Add New User</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="update_user.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Update User Access</p>
            </a>
          </li>
        </ul>    
      
        <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Parcel Utilities
          <i class="fas fa-angle-left right"></i>
          </p>
        </a>

        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="register.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Register</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="claim.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Claim</p>
            </a>
          </li>
        </ul>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-arrow-circle-right"></i>
          <p>
            Parcel Status
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>

        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="arrived.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>New Arrived</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="collected.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Collected</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pending.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Pending</p>
            </a>
          </li>';
    }

?>