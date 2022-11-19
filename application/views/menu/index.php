

        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

<div class="row">
    <div class="col-lg-6">
       <!--pesan error -->
       <?= form_error(
           'menu',
           '<div class="alert alert-success" role="alert">
           </div>'

       ); ?>
       <?= $this->session->flashdata('message'); ?>
       <!-- akhir pesan error -->

       <!-- tombol tambah -->
       <a href="" class="btn btn-primary mb-3" class="btn btn-primary"
       data-toggle="modal" data-target="#logoutModal">Add Menu</a>
       <!-- tabel -->
       <table class="table table-hover">
            <thead>
               <tr>
                  <th scope="col">#</th>
                  <th scope="col">Menu</th>
                  <th scope="col">Action</th>

                </tr>
                </thead>
                <tbody>
                   <?php $i = 1; ?>
                   <?php foreach ($menu as $m) : ?>
                     <tr>
                         <th scope="row"><?= $i; ?></th>
                         <td><?= $m['menu']; ?></td>
                         <td>
                         <a href="<?= base_url('menu/edit'); ?>" class="btn btn-success btn-sm" 
                         data-toggle="modal" data-target="#exampleModalmenuedit<?= $m['id']; ?>">Edit</a>
                         <button onclick="hapusMenu('<?= base_url('menu/hapusmenu/') . $m['id'] ?>')"
                        class="btn btn-danger tombol-hapus btn-sm" >Delete</button>
                        
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
            </table>
            <!-- akhir tabel -->


        </div>
    </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content --> 

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalsubedit<?= $m['id']; ?>" tabindex="-1"
    aria-labellebdy="newMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                    <h5 class="modal-title" id="newMenuModalLabel">Add new Menu</h5>
                    <button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="close"></button>
                </div>
                <form action="<?= base_url('menu'); ?>"method="post">
                    <div class="modal-body">
                            <div class="form-group">
                            <input type="text" class="form-control" id="menu"
                            name="menu" placeholder="Menu Name">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
     </div>

     
<?php foreach ($menu as $m) : ?>

<div class="modal fade" id="exampleModalmenuedit<?= $m['id']; ?>" 
tabindex="-1" role="dialog"
aria-labellebdy="exampleModalsubedit" aria-hidden="true">
<div class="modal-dialog" role="document">
   <div class="modal-content">
      <div class="modal-header">
           <h5 class="modal-title" id="exampleModalsubedit">Edit subMenu</h5>
           <button type="button" class="close" data-dismiss="modal"
           aria-label="close">
               <span aria-hidden="true">&times;</span>
           </button>
       </div>
       <form action="<?= base_url('menu/editmenu'); ?>"method="post">
           <div class="modal-body">
               <div class="form-group">
                   <input type="text" value="<?= $m['menu'] ?>"
                   class="form-control" id="menu"
                   name="menu" placeholder="menu ">
               </div>
               <div class="form-group">
                       <input type="hidden" class="form-control" id="id" name="id"
                       readonly value="<?= $m['id'] ?>">

               </div>
          
                  </div>
              
               <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       <button type="submit" name="edit" class="btn btn-primary">Update</button>
                   </div>
               </form>
           </div>
       </div>
   </div>
<?php endforeach; ?>

