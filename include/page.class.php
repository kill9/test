<?php

namespace core;

/* 分页类 */

class page {

    private $count;
    private $pagesize;
    private $url;
    private $pages;
    private $num;
    public $limit_start;
    public $limit_end;

    //数据总量，当前页码,每页显示多少,分页连接，分页个数
    public function __construct($count = 0, $event = 1, $pagesize = 20, $url = '', $pages = 30) {
        $this->count = $count;
        $this->pagesize = $pagesize;
        $this->event = $event;
        $this->url = $url;
        $this->pages = $pages;
        $this->limit_start = ($event - 1) * $pagesize;
        $this->limit_end = $pagesize;
    }

    //输出分页
    public function show() {
        //分页总数
        $this->num = $this->num();
        $page = $this->makepage($num);
        return $page;
    }

    //计算分页数量
    private function num() {
        return ceil($this->count / $this->pagesize);
    }

    //生成分页
    private function makepage() {
        $html = '';
        if ($this->event > 1) {
            $html = '<li class="page-item"><a class="page-link" href="index.php?f=' . FOLDER_NAME . '&m=' . CONTROLLER_NAME . '&a=' . FUNCTION_NAME . '&p=1" aria-label="Previous"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>' . PHP_EOL;
        }
        $blod_style = 'style="font-weight:bold"';
        if ($this->event < $this->pages) {
            for ($i = 1; $i <= $this->num; $i++) {
                if ($i <= $this->pages) {
                    $html .= '<li class="page-item"><a class="page-link" href="index.php?f=' . FOLDER_NAME . '&m=' . CONTROLLER_NAME . '&a=' . FUNCTION_NAME . '&p=' . $i . '">' . $i . '</a></li>' . PHP_EOL;
                }
            }
        } else if ($this->event > ($this->num - $this->pages)) {
            for ($i = 1; $i <= $this->num; $i++) {
                if ($i >= ($this->num - $this->pages)) {
                    $html .= '<li class="page-item"><a class="page-link" href="index.php?f=' . FOLDER_NAME . '&m=' . CONTROLLER_NAME . '&a=' . FUNCTION_NAME . '&p=' . $i . '">' . $i . '</a></li>' . PHP_EOL;
                }
            }
        } else {
            for ($i = 1; $i <= $this->num; $i++) {
                if ($i > ($this->event - floor($this->pages / 2)) && $i < ($this->event + ceil($this->pages / 2))) {
                    $html .= '<li class="page-item"><a class="page-link" href="index.php?f=' . FOLDER_NAME . '&m=' . CONTROLLER_NAME . '&a=' . FUNCTION_NAME . '&p=' . $i . '">' . $i . '</a></li>' . PHP_EOL;
                }
            }
        }

        if ($this->event < $this->num) {
            $html .= '<li class="page-item"><a class="page-link" href="index.php?f=' . FOLDER_NAME . '&m=' . CONTROLLER_NAME . '&a=' . FUNCTION_NAME . '&p=' . $this->num . '" aria-label="Next"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>';
        }
        $html .= '<li class="page-item"><a class="page-link" href="javascript:void(0);">共' . $this->count . '条数据</a></li>';
        return $html;
    }

}
