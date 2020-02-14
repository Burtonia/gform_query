<?php
class GForm_Query extends GFAPI {
  public $form_id;
  public $the_query;
  public $sorting;
  public $paging;
  public $total_count;
  public $new_query;

  function __construct($args) {
    $this->form_id = $args['form_id'] ? $args['form_id'] : false;
    $this->the_query = $args['the_query'] ? $args['the_query'] : false;
    $this->sorting = $args['sorting'] ? $args['sorting'] : null;
    $this->paging = $args['paging'] ? $args['paging'] : null;
    $this->total_count = $args['total_count'] ? $args['total_count'] : null;
    $this->new_query = $this->query($this->form_id, $this->the_query);
  }

  public function init() {
    $form_id = $this->form_id;
    $the_query = $this->the_query;
    $sorting = $this->sorting;
    $paging = $this->paging;
    $total_count = $this->total_count;
    $new_query = $this->new_query;
  }

  public function query($form_id, $the_query) {
    $new_query = GFAPI::get_entries($form_id, $the_query, $sorting, $paging, $total_count);
    return $new_query;
  }
}
