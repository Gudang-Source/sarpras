<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// You can Rename the Class to whatever you want, just remember to change the file name
class Perfect_model extends CI_Model
{
        /*
        Everything is build based on the CodeIgniter Query Builder, so all data will be sanitized by the framework.
        Get Method, you can get anything from your database setting the next $config array on your controller:
        $config = array(
			'select' => '*', or "row1, row2, ..."
			'table' => 'tableName',
			'where' => array(   ( You can add as many as you want, just name them different for example: one, two, three, four, ... )
						'one' => array(
									'row' => 'value'
								),
                        'two' => array(
                                    'row' => 'value'
                                )
                        ...
                        ),
			'orderby' => array(
					        'key' => 'id',
					        'order' => 'DESC' or 'ASC'
			            ),
			'limit' => 20,
			'offset' => 0,
			'return' => 'result_array' or "row" or "num_rows"
        );
        Them call it $this->pefect_model->get( $config );
            
        In case you don´t need limit, offset, where or orderby, just remove them from your $config array, all data is required less those.
        Enjoy!
    */
    public function get( $config )
    {
        $this->db->select( $config['select'] );
        $this->db->order_by( $config['orderby']['key'], $config['orderby']['order'] );
        if( isset($config['where'] ) ):
            foreach( $config['where'] as $num => $array ):
                foreach( $array as $row => $key ):
                    $this->db->where( $row, $key );
                endforeach;
            endforeach;
        endif;
                
        if( isset( $config['limit'] ) && !isset( $config['offset'] ) ):
            $query = $this->db->get( $config['table'], $config['limit'] );    
        elseif( isset( $config['offset'] ) && isset( $config['limit'] ) ):
            $query = $this->db->get( $config['table'], $config['limit'], $config['offset'] );
        elseif( !isset( $config['offset'] ) && !isset( $config['limit'] ) ):
            $query = $this->db->get( $config['table'] );
        endif;
        
        if( $config['return'] == 'result_array' ):
            return $query->result_array();
        elseif( $config['return'] == 'row' ):
            return $query->row();
        elseif( $config['return'] == 'num_rows' ):
            return $query->num_rows();
        endif;
    }
}