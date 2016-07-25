    <div class="container top">

      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(1));?>
          </a>
          <span class="divider">/</span>
        </li>
        <li>
        Email
          <span class="divider">/</span>
        </li>
        <li class="active">
          <a href="#">Ler</a>
        </li>
      </ul>

      <div class="page-header">
        <h2>
        E-mail
        </h2>
      </div>


      <?php
      //flash messages
      if($this->session->flashdata('flash_message')){
        if($this->session->flashdata('flash_message') == 'updated')
        {
          echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Well done!</strong> product updated with success.';
          echo '</div>';
        }else{
          echo '<div class="alert alert-error">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Oh snap!</strong> change a few things up and try submitting again.';
          echo '</div>';
        }
      }
      ?>

      <?php
      //form data
      $attributes = array('class' => 'form-horizontal', 'id' => '');
      $options_manufacture = array('' => "Select");
      foreach ($manufactures as $row)
      {
        $options_manufacture[$row['id']] = $row['name'];
      }

      //form validation
      echo validation_errors();

      echo form_open('admin/products/update/'.$this->uri->segment(4).'', $attributes);
      ?>
        <fieldset>
          <div class="control-group">
            <label for="inputError" class="control-label">Nome</label>
            <div class="controls">
              <input type="text" id="" name="description" value="<?php echo $product[0]['description']; ?>" >
              <!--<span class="help-inline">Woohoo!</span>-->
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Sobrenome</label>
            <div class="controls">
              <input type="text" id="" name="stock" value="<?php echo $product[0]['stock']; ?>">
              <!--<span class="help-inline">Cost Price</span>-->
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Email</label>
            <div class="controls">
              <input type="text" id="" name="cost_price" value="<?php echo $product[0]['cost_price'];?>">
              <!--<span class="help-inline">Cost Price</span>-->
            </div>
          </div>
          <div class="control-group">
            <label for="inputError" class="control-label">Mensagem</label>
            <div class="controls">
              <textarea>
<?php echo $product[0]['mensagem'];?>

              </textarea>
              <!--<span class="help-inline">Cost Price</span>-->
            </div>
          </div>

          <div class="form-actions">

            <a href="../products" class="btn" type="">Voltar</a>
          </div>
        </fieldset>

      <?php echo form_close(); ?>

    </div>
