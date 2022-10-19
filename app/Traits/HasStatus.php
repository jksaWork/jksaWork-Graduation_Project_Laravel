<?php

namespace App\Traits;
trait HasStatus {
    public function ChangeStatus(){
        $this->status =!$this->status;
        $this->save();
    }

    public function getStatusWithSpan(){
        if($this->staus) return "<span class='badge badge-warning'> Not Actice</span>";
        else  return "<span class='badge badge-success'> Actice</span>";
    }
}
