<?php include_once('admin_header.php'); ?>

<?php include_once('admin_sidebar.php'); ?>

				
			<div class="col-sm-10 col-md-10">
			<div class="row">
				<div class="col">
					<a href="add_sem" class="btn btn-lg btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> Add New Semester</a>
				</div>
			
				<!-- xxxxxxxxxxxxx     feedback message xxxxxxxxxxxxxxx-->
				<?php if($feedback=$this->session->flashdata('feedback')):
					$feedback_class=$this->session->flashdata('feedback_class'); ?>

				
					 <div class="row">
					 <div class="col-lg-6 col-lg-offset-2">
						<div class="alert alert-dismissible <?= $feedback_class?>">
								<?= $feedback ?>
						</div>
					</div>
					</div>
					
				<?php endif; ?>

			</div>

				
			
			<table class="table table-hover ">
				<thead>
					<th>S.No</th>
					<th>Semester</th>
					<th>Action</th>
				</thead>
				<tbody>
				<?php if(count($sem)): ?>
					<?php foreach ($sem as $Semester): ?>
					<tr>
						
						<td>
							<?= $Semester->SEMID ?>
						</td>
						<td>
							<?= $Semester->SEM ?>
						</td>
						<td>
							<div class="col-md-2">
							<?= anchor("admin/edit_sem/{$Semester->SEMID}",'Edit',['class'=>'btn btn-info']);  ?>
							<!-- <a href="#" class="btn btn-info">Edit</a> -->
							</div>
							<div class="col-md-2">
							<!-- <a href="#" class="btn btn-danger">Delete</a> -->
							<?= form_open('admin/delete_sem'),
								form_hidden('sem_id',$Semester->SEMID),
								form_submit(['value'=>'Delete','class'=>'btn btn-danger']),
								form_close();
								?>
							</div>
						</td>
					</tr>

				<?php endforeach;  ?>


				<?php else: ?>
					<tr>
						<td colspan="3"> No Records  Found</td>
					</tr>
				
				<?php endif; ?>
			</tbody>

			</table>
		</div>
	</div>
</div>







<?php include_once('admin_footer.php'); ?>