
<div class="col-md-10">       
          <div class="content">
            <div class="col-md-4 add-dm">
              <h4 class="text-center">Sửa danh mục <font color="blue"><?php echo $this->session->flashdata('mess');?></font> </h4>
            </div>
            <div class="clearfix"></div>
            <form method="post">
              <div class="form">              
                <table class="table">
                    <tbody><tr>
                      <td><p>Tiêu đề danh mục <font color='red'> <?php form_error('$title');?></font></p>
                      <td>
                        <input name="title" class="form-control" type="text" value='<?php echo $row->ten_dm ?>' >
                      </td>
                    </tr>             
                </tbody></table>              
              </div>
              <div class="col-md-3 form-group pull-right">
                 <input name="ok" value="saves" class="btn btn-primary btn-block" type="submit">
              </div>
            </form>
          </div><!--end .content-->
        </div>
