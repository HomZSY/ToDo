<?php
namespace Home\Controller;
use Think\Controller;
class ListController extends BaseController {

    public function _initialize() {
        parent:: _initialize();
        if( !ss_user_id() ){
            $this->redirect('User/login');
        }else{
            $this->assign('username',ss_user_name());
        }
    }
    public function todo_list() {
        $md = D("Details");
        $details = $md->get_details();
        $all_count = $md->get_all_count();
        $pages = $md->articlePage( $all_count , C('INDEX_ARTICLE_NUM') );
        $event_tip = $md->get_event_tip();
        $this->assign('event_tip', $event_tip);
        $this->assign('all_pages', $pages);
        $this->assign('details', $details);
//        dump($pages);
//        dump($details);
        $this->display();
    }
	
	public function ajax_get_list() {
		$json = array('status'=>false,'info'=>'','data'=>'','ajax_page'=>'');
        $md = D("Details");
        $details = $md->get_details();
//      $all_count = $md->get_all_count();
//      $pages = $md->articlePage( $all_count , C('INDEX_ARTICLE_NUM') );
        $json['status'] = true;
        $json['info'] = '获取成功';
        $json['data'] = $details;
//      $json['ajax_page'] = $pages;
        $this->ajaxReturn($json);
	}
	/* 包括新增和编辑  */
	public function ajax_add_list() {
		$json = array('status' => false, 'info' => '', 'data' => '');
		$id = I('id');
        $title = I('title');
        $content = I('content');
        $level_id = I('level_id');
        $create_time = time();
        $due_to_time = I('endTime');
        $md = D('Details');
        $json['status'] = $md->addEvent($id,$title,$content,$level_id,$create_time,$due_to_time);
        if ($json['status']) {
            $json['info'] = "下蛋成功，等待孵化`(*∩_∩*)′";
        } else {
        	$json['info'] = "很遗憾，下蛋失败(>_<) 请再试试吧~";
        }
        $this->ajaxReturn($json);
	}
	/* 鸡蛋孵化   */
	public function ajax_finish_event() {
		$json = array('status' => false, 'info' => '', 'data' => '');
		$id = I('id');
       	$is_finished = I('is_finished');
		$do_time = time();
        $md = D('Details');
        $json['status'] = $md->finishEvent($id,$is_finished,$do_time);
        if ($json['status']) {
            $json['info'] = "孵化成功，恭喜你完成任务`(*∩_∩*)′";
        } else {
        	$json['info'] = "很遗憾，孵化失败(>_<) 请再试试吧~";
        }
        $this->ajaxReturn($json);
	}
	/*
    public function ajax_todo_list(){
        $json = array('status'=>false,'info'=>'','data'=>'','ajax_page'=>'');
        $md = D("Details");
        $details = $md->get_details();
        $all_count = $md->get_all_count();
        $pages = $md->articlePage( $all_count , C('INDEX_ARTICLE_NUM') );
        $json['status'] = true;
        $json['info'] = '获取成功';
        $json['data'] = $details;
        $json['ajax_page'] = $pages;
        $this->ajaxReturn($json);
    }

    public function ajax_change_finished(){
        $json = array('status'=>false,'info'=>'','data'=>'');
        $id = I('id');
        $is_finished = I('is_finished');
        $md = D("Details");
        $r_content = $md->check_content($id);
        if(!$r_content){
            $json['info'] = '请先添加内容!';
            $json['data'] = $is_finished;
            $this->ajaxReturn($json);
        }
        $r_finished = $md->change_finished($id,$is_finished);
        if(!$r_finished){
            $json['info'] = '数据请求失败!';
            $json['data'] = $is_finished;
            $this->ajaxReturn($json);
        }
        $lev_fin_ids = $md->change_finished_lev_fin($id);
        $json['status'] = true;
        $json['info'] = '修改成功!';
        $json['data'] = $lev_fin_ids;
        $this->ajaxReturn($json);
    }

    public function ajax_del(){
        $json = array('status'=>false,'info'=>'','data'=>'');
        $id = I('id');
        $is_finished = I('is_finished');
        if(!$id){
            $json['info'] = '数据出错!';
            $json['data'] = array($id , $is_finished);
            $this->ajaxReturn($json);
        }
        $r_del = D("Details")->del_detail($id,$is_finished);
        if(!$r_del){
            $json['info'] = '删除失败!';
            $json['data'] = $r_del;
            $this->ajaxReturn($json);
        }
        $json['status'] = true;
        $json['info'] = '删除成功!';
        $json['data'] = $r_del;
        $this->ajaxReturn($json);
    }
    public function ajax_search_level(){
        $json = array('status'=>false,'info'=>'','data'=>'','ajax_page'=>'');
        $level_id = I('level_id');
        $md = D("Details");
        $details = $md->get_details($level_id,null);
        $json['data'] = $details;

        $level_count = $md->get_count_level($level_id);
        $pages = $md->articlePage( $level_count , C('INDEX_ARTICLE_NUM') );
        $json['ajax_page'] = $pages;

        $this->ajaxReturn($json);
    }
    public function ajax_page(){
        $json = array('status'=>false,'info'=>'','data'=>'','ajax_page'=>'');
        $p = I('p');
        $md = D("Details");
        $details = $md->get_details(null,$p);
        $json['data'] = $details;

        $all_count = $md->get_all_count();
        $pages = $md->articlePage( $all_count , C('INDEX_ARTICLE_NUM') );
        $json['status'] = true;
        $json['ajax_page'] = $pages;
        $this->ajaxReturn($json);
    }
    public function ajax_page_level(){
        $json = array('status'=>false,'info'=>'','data'=>'','ajax_page'=>'');
        $p = I('p');
        $level_id = I('level_id');
        $md = D("Details");
        $details = $md->get_details($level_id,$p);
        $json['data'] = $details;

        $level_count = $md->get_count_level($level_id);
        $pages = $md->articlePage( $level_count , C('INDEX_ARTICLE_NUM') );
        $json['status'] = true;
        $json['ajax_page'] = $pages;
        $this->ajaxReturn($json);
    }
    public function ajax_page_time(){
        $json = array('status'=>false,'info'=>'','data'=>'','ajax_page'=>'');
        $p = I('p');
        $start_time = I('start_time');
        $end_time = I('end_time');
        $do_start_time = I('do_start_time');
        $do_end_time = I('do_end_time');
        $category_id = I('category_id');
        $md = D("Details");
        $details = $md->get_details_time($start_time, $end_time, $do_start_time, $do_end_time, $category_id, $p);
        $json['data'] = $details;

        $time_count = $md->get_count_time($start_time, $end_time, $do_start_time, $do_end_time, $category_id);
        $pages = $md->articlePage( $time_count , C('INDEX_ARTICLE_NUM') );
        $json['status'] = true;
        $json['ajax_page'] = $pages;
        $this->ajaxReturn($json);
    }


    public function ajax_search_time(){
        $json = array('status'=>false,'info'=>'','data'=>'','ajax_page'=>'');
        $start_time = I('start_time');
        $end_time = I('end_time');
        $do_start_time = I('do_start_time');
        $do_end_time = I('do_end_time');
        $category_id = I('category_id');
        $md = D("Details");
        $details = $md->get_details_time($start_time, $end_time, $do_start_time, $do_end_time, $category_id);
        $json['data'] = $details;

        $time_count = $md->get_count_time($start_time,$end_time, $do_start_time, $do_end_time, $category_id);
        $pages = $md->articlePage( $time_count , C('INDEX_ARTICLE_NUM') );
        $json['ajax_page'] = $pages;
        $json['status'] = true;
        $this->ajaxReturn($json);
    }

    public function ajax_search_fin_lev(){
        $json = array('status'=>false,'info'=>'','data'=>'','ajax_page'=>'');
        $level_id = I('level_id');
        $is_finished = I('is_finished');
        $md = D("Details");
        $details = $md->get_details_fin_level($level_id,$is_finished);
        $json['data'] = $details;

        $fin_lev_count = $md->get_count_fin_lev($level_id,$is_finished);
        $pages = $md->articlePage( $fin_lev_count , C('INDEX_ARTICLE_NUM') );
        $json['ajax_page'] = $pages;
        $json['status'] = true;
        $this->ajaxReturn($json);
    }

    public function ajax_page_fin_lev(){
        $json = array('status'=>false,'info'=>'','data'=>'','ajax_page'=>'');
        $level_id = I('level_id');
        $is_finished = I('is_finished');
        $p = I('p');
        $md = D("Details");
        $details = $md->get_details_fin_level($level_id,$is_finished,$p);
        $json['data'] = $details;

        $fin_lev_count = $md->get_count_fin_lev($level_id,$is_finished);
        $pages = $md->articlePage( $fin_lev_count , C('INDEX_ARTICLE_NUM') );
        $json['status'] = true;
        $json['ajax_page'] = $pages;
        $this->ajaxReturn($json);
    }*/
    /*
     * @author sameen
     * */
    public function backwards(){
        $mBack = D('Backwards');
        $b_info = $mBack->get_info();
        $last = $mBack->get_last();
        $this->assign('b_info',$b_info)->assign('last',$last)->display();
    }

    public function ajax_deal_info(){
        $json = array('status'=>false, 'info'=>'', 'data'=>'');
        $editId = I('editId');
        $name = I('name');
        $remark = I('remark');
        $deadline = strtotime(I('deadline'));

        if(!$name){
            $json['info']='倒数事项不可以为空咯(#‵′)凸';
            $json['data']=$deadline;
            $this->ajaxReturn($json);
        }
        if(!$deadline){
            $json['info']='请选择到期时间好不好！(#‵′)凸';
            $this->ajaxReturn($json);
        }
        $mBack = D('Backwards');
        if(!$editId){
            $add=$mBack->add_info($name,$remark,$deadline);
            if(!$add){
                $json['info']='添加失败哦~~~~(>_<)~~~~,刷新中..';
                $this->ajaxReturn($json);
            }else{
                $json['status']=true;
                $json['info']='添加成功啦~\(≧▽≦)/~,刷新中..';
                $this->ajaxReturn($json);
            }
        }else{
            $edit = $mBack->edit_info($editId,$name,$remark,$deadline);
            if(!$edit){
                $json['info']='编辑出错哦(～ o ～)~,刷新中..';
                $this->ajaxReturn($json);
            }else{
                $json['status']=true;
                $json['info']='编辑成功耶(*^__^*),刷新中..';
                $this->ajaxReturn($json);
            }
        }
    }

    public function ajax_get_info(){
        $json = array('status'=>false, 'info'=>'', 'id'=>'','name'=>'', 'remark'=>'', 'deadline'=>'');
        $editId = I('editId');
        $mBack = D('Backwards');
        $info = $mBack->show_info($editId);
        if(!$info){
            $json['info'] = '出错了╮(╯_╰)╭';
            $json['id'] = $info['id'];
            $json['name'] = $info['name'];
            $json['remark'] = $info['remark'];
            $json['deadline'] = date('Y-m-d H:i:s', $info["deadline"]);
            $this->ajaxReturn($json);

        }
        if($info == 111){
            $json['info'] = 'add!';
            $json['id'] = '';
            $json['name'] = '';
            $json['remark'] = '';
            $json['deadline'] = '';
            $json['status'] = true;
            $this->ajaxReturn($json);
        }
        else{
            $json['id'] = $info['id'];
            $json['name'] = $info['name'];
            $json['remark'] = $info['remark'];
            $json['deadline'] = date('Y-m-d H:i:s', $info["deadline"]);
            $json['status'] = true;
            $this->ajaxReturn($json);
        }
    }
    public function notes(){
        $mNote = D('Notes');
        $note = $mNote->get_note();
        $this->assign('note',$note)->display();
    }
    public function ajax_delete(){
        $id = I('id');
        $json = array('satus'=>false,'data'=>'');
        $mNote = D('Notes');
        $result=$mNote->del_note($id);
        if(!$result){
            $json['data']='删除操作失败';
            $this->ajaxReturn($json);
        }
        else{
            $json['status']=true;
            $json['data']='删除成功';
            $this->ajaxReturn($json);
        }

    }
    public function ajax_deal_note(){
        $json = array('satus'=>false,'data'=>'');
        $content = I('content');
        $paper_type = I('paper_type');
        $color = I('color');
        $id=I('id');
        $user_id = ss_user_id();
        $mNote = D('Notes');
        if(!$id){
            $result = $mNote->add_note($user_id,$content,$paper_type,$color);
            if(!$result){
                $json['data']='新增失败！';
                $this->ajaxReturn($json);
            }else{
                $json['status']=true;
                $json['note_id'] = $result;
                $json['data']='新增成功！';
                $this->ajaxReturn($json);
            }
        }else{
            $result = $mNote->edit_note($id,$content,$paper_type,$color);
            if(!$result){
                $json['data']='编辑失败！';
                $this->ajaxReturn($json);
            }else{
                $json['status']=true;
                $json['data']='编辑成功！';
                $this->ajaxReturn($json);
            }
        }
    }
}