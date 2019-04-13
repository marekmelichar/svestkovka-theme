<?php
/**
 * Block Name: parking_map
 *
 *
 */


// create id attribute for specific styling
$id = 'parkingmap-' . $block['id'];

?>

<section id="<?php echo $id; ?>">
  <div class="container">
    <div class="row">
      <div class="col">
        <?php get_template_part('svg/parking_map.svg') ?>
        <div class="table-responsive">
          <?php $table = get_field( 'parking_map_table' );

            if ( ! empty ( $table ) ) {

                echo '<table class="table" border="0">';

                    if ( ! empty( $table['caption'] ) ) {

                        echo '<caption>' . $table['caption'] . '</caption>';
                    }

                    if ( ! empty( $table['header'] ) ) {

                        echo '<thead>';

                            echo '<tr>';

                                foreach ( $table['header'] as $th ) {

                                    echo '<th scope="col">';
                                        echo $th['c'];
                                    echo '</th>';
                                }

                            echo '</tr>';

                        echo '</thead>';
                    }

                    echo '<tbody>';

                        foreach ( $table['body'] as $tr ) {

                            echo '<tr>';

                                foreach ( $tr as $td ) {

                                    echo '<td>';
                                        echo $td['c'];
                                    echo '</td>';
                                }

                            echo '</tr>';
                        }

                    echo '</tbody>';

                echo '</table>';
            } ?>
        </div>
      </div>
    </div>
  </div>
</section>






<style type="text/css">
	#<?php echo $id; ?> {
    background-color: #fff;
    padding: 2rem;

    -webkit-box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
    -moz-box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
    box-shadow: 0px 6px 6px 0px rgba(0,0,0,0.16);
	}

  #<?php echo $id; ?> svg {
    width: 100%;
  }

  #<?php echo $id; ?> table {
    margin: 3rem 0 0 0;
  }

  #<?php echo $id; ?> .table td,
  #<?php echo $id; ?> .table th {
    padding: 0.5rem 0.25rem 0.25rem 0.25rem;
    border-top: 1px solid #dee2e6;
}

  #<?php echo $id; ?> table thead tr th {
    font-family: 'source_sans_probold', arial;
  }

  #<?php echo $id; ?> table tbody tr td:first-child {
    font-family: 'source_sans_probold', arial;
  }






  @media (max-width: 767px) {


  }

</style>
