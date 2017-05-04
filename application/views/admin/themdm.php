
<div class="col-md-10">       
          <div class="content">
            <div class="col-md-5 add-dm">
              <h4>Thêm danh mục <font color='red'><?php echo $this->session->flashdata('mess')?></font></h4>
            </div>
            <div class="clearfix"></div>
            <form method="post">
              <div class="form">              
                <table class="table">
                    <tbody><tr>
                      <td><p>Tên danh mục</p><span><?php echo form_error('ten_dm');?></span></td>
                      <td>
                        <input name="ten_dm" class="form-control" type="text" value="<?php set_value('ten_dm')?>">
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
