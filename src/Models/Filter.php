<?php

namespace LaraFenix007\Eagle\Models;


class Filter extends AbstractModel
{
    public $id;
    public $name;
    public $total_entries;
    public $total_pages;
    public $current_page;
    public $records;
}
