<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Keja Digital</title>
    
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body class="hold-transition sidebar-mini" >
    <div class="wrapper" id="app">
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
        </ul>
        <form class="form-inline ml-3">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </nav>
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
          <img src="/logo/home.png" alt="Keja Dijital" class="brand-image img-circle"
          style="opacity: .8">
          <span class="brand-text font-weight-light">Keja Digital</span>
        </a>
        <div class="sidebar">
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="/logo/default.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
          </div>
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <router-link to="/dashboard" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </router-link>
              </li>
              <li class="nav-item has-treeview nu-open">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Users
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item pl-4">
                    <router-link to="/users" class="nav-link">
                      <p>All Users</p>
                    </router-link>
                  </li>
                  <li class="nav-item pl-4">
                    <router-link to="/admin" class="nav-link">
                      <p>Admin</p>
                    </router-link>
                  </li>
                  <li class="nav-item pl-4">
                    <a href="#" class="nav-link">
                      <p>Agent</p>
                    </a>
                  </li>
                  <li class="nav-item pl-4">
                    <a href="#" class="nav-link">
                      <p>Tenant</p>
                    </a>
                  </li>
                  <li class="nav-item pl-4">
                    <a href="#" class="nav-link">
                      <p>Customer</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview nu-open">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Properties
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item pl-4">
                    <a href="#" class="nav-link">
                      <p>List</p>
                    </a>
                  </li>
                  <li class="nav-item pl-4">
                    <a href="#" class="nav-link">
                      <p>Booked</p>
                    </a>
                  </li>
                  <li class="nav-item pl-4">
                    <a href="#" class="nav-link">
                      <p>Rented</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview nu-open">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-money-check-alt"></i>
                  <p>
                    Payment
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item pl-4">
                    <a href="#" class="nav-link">
                      <p>Check Payment</p>
                    </a>
                  </li>
                  <li class="nav-item pl-4">
                    <a href="#" class="nav-link">
                      <p>Make Payment</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Simple Link
                    <span class="right badge badge-danger">New</span>
                  </p>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </aside>
      <div class="content-wrapper">
        <div class="content-header">
          <div class="container-fluid">
            <router-view></router-view>
          </div>
        </div>
        <div class="content">
          <div class="container-fluid">
            <div class="row">
            </div>
          </div>
        </div>
      </div>
    </div>
      <script src="/js/app.js"></script>
    </body>
  </html>