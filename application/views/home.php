<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <h3>Daftar Berita</h3>
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                             <div class="form-group">
                               <form action="<?php echo base_url();?>home/mencari" method="post">
                              <div class="col-sm-10">
                                  <input type="text"  name="cari" class="form-control" placeholder="Masukkan Title">
                              </div>
                              <button type="submit" class="btn btn-primary">Search</button>
                              </form>
                          </div>
                             <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Title</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Content</th>
                                  <th><i class="fa fa-bookmark"></i> Kategori</th>
                                  <th><i class=" fa fa-edit"></i> Image </th>
                                  <th><i class=" fa fa-bookmark"></i> Reporter </th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                               <?php foreach($news as $a) { ?>
                              <tr>
                                  <td><?php echo $a->title;?></td>
                                   <td><?php echo $a->content;?></td>
                                  <td><?php echo $a->kategori;?></td>
                                  <td><img src="<?php echo base_url();?>foto/<?php echo $a->image;?>" width="70" height="70" alt="img"></td>
                                  <td><?php echo $a->nama;?></td>
                                  <td>
                                      <a href="<?php echo base_url('home/update/'.$a->id);?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                      <a href="<?php echo base_url('home/batal/'.$a->id);?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                  </td>
                              </tr>
                              <?php }?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

      </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->