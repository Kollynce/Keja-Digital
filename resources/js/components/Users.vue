<template>
<div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Users List</h3>
						<div class="card-tools">
							<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addnew"> <i class="fas fa-user-plus"></i> Add User</button>
						</div>
					</div>
					<!-- /.card-header -->
					<div class="card-body table-responsive p-0">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th>User</th>
									<th>Email</th>
									<th>Type</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>183</td>
									<td>John Doe</td>
									<td>11-7-2014</td>
									<td><span class="tag tag-success">Approved</span></td>
									<td>
										<a href="#">
											<i class="fa fa-edit p-1 text-primary"></i>
										</a>
										<a href="#">
											<i class="fa fa-trash p-1 text-danger"></i>
										</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="addnewLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="addnewLabel">Add User</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form @submit.prevent="createUser">
				<div class="modal-body">
					<div class="form-group">
				      <label>Username</label>
				      <input v-model="form.name" type="text" name="name"
				      	placeholder="Enter Username"
				        class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
				      <has-error :form="form" field="name"></has-error>
				    </div>
				    <div class="form-group">
				      <label>User Email</label>
				      <input v-model="form.email" type="email" name="email"
				      	placeholder="Enter User Email"
				        class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
				      <has-error :form="form" field="email"></has-error>
				    </div>
				    <div class="form-group">
				      <label>User Bio</label>
				      <textarea name="" id="bio" cols="30" rows="10" v-model="form.bio" name="bio"
				      	placeholder="Enter User Email"
				        class="form-control" :class="{ 'is-invalid': form.errors.has('bio') }"></textarea>
				      <has-error :form="form" field="bio"></has-error>
				    </div>
				    <div class="form-group">
				      <label>User Type</label>
				      <select name="type" v-model="form.type" class="form-control" :class="{'is-invalid': form.errors.has('type')}" id="type">
				      	<option value="">Select User Role</option>
				      	<option value="admin">Admin</option>
				      	<option value="agent">Agent</option>
				      	<option value="tenant">Tenant</option>
				      	<option value="customer">Customer</option>
				      </select>
				      <has-error :form="form" field="bio"></has-error>
				    </div>
					<div class="form-group">
				      <label>Password</label>
				      <input v-model="form.password" type="password" name="password"
				        class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
				      <has-error :form="form" field="password"></has-error>
				    </div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Create</button>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
</template>
<script>
	export default {
		data(){
			return{
				form: new Form({
					name: '',
					email: '',
					password: '',
					type: '',
					bio:'',
					pic:''
				})
			}
		},
		methods:{
			createUser(){
				this.form.post('api/user')
			}
		},
		mounted() {
			console.log('Component mounted.')
		}
	}
</script>
<style>
</style>
