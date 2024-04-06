<?php

namespace App\Traits;

trait AdjustTime {

    public function created_on(){
        return $this->created_at->utcOffset(60);
    }

    public function updated_on(){
        return $this->updated_at->utcOffset(60);
    }

    public function createdAt()
    {
      return $this->created_at->format('d-m-Y');
    }
}