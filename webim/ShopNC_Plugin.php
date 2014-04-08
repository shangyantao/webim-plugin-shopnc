<?php

namespace WebIM;

class ShopNC_Plugin extends Plugin {


    public function __construct() {
        //TOOD: load shopnc models
        parent::__construct();
    }

	protected function uid() {
        //TODO: load shopnc uid
        return parent::uid();
    }

    protected function user($uid) {
        return parent::user($uid);
    }

    /**
     * TOOD: self as buddy
     */
    public function buddies($uid) {
        return parent::buddies($uid);
    }

    /**
     * TODO:
     */
    public function buddiesByIds($ids) {
        return parent::buddiesByIds($ids);
    }

    /**
     * TODO:
     */
    public function room($id) {
        return parent::room($id);
    }

    /**
     * TODO:
     */
    public function rooms($uid) {
        return parent::rooms($uid);
    }

    /**
     * TODO:
     */
    public function roomsByIds($ids) {
        return parent::roomsByIds($ids);
    }

    /**
     * TODO:
     */
    public function members($room) {
        return parent::members($room);
    }

    /**
     * TODO:
     */
    public function notifications($uid) {
        return parent::notifications($uid);
    }

}

