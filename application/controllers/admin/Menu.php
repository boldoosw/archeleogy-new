<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Menu extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();

		if (!$this->ion_auth->in_group('admin')) {
			$this->postal->add('You are not allowed to visit the Categories page', 'error');
			redirect('admin');
		}

		$this->load->model('getmenu');
		$this->load->model('getuser');
		$this->load->model('getbase');
		date_default_timezone_set('Asia/Ulaanbaatar');
	}

	public function index()
	{
		$this->data["menu"] = $this->getbase->getinfo('menu', -1, 1, 100, "language", $this->current_lang, "sort");
		$this->data["menu1"] = $this->getmenu->getinfo2();
		$this->data["menu2"] = $this->getmenu->getinfo3();
		$this->render('apanel/menu/home');
	}

	public function save()
	{
		$ids = $this->input->post("menuid");

		$config['upload_path'] = 'images/menu/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '8000';
		$config['max_width'] = '5000';
		$config['max_height'] = '5000';

		$this->load->library('upload', $config);

		$image1 = 'menupic';

		if (!$this->upload->do_upload($image1)) {
			$edit = 0;
			$filenamestring = $this->input->post("menupicurl");
			$filenamesmallstring = $this->input->post("menusmallpicurl");
		} else {
			$edit = 1;

			if (!is_dir('images/menu/')) {
				mkdir('images/menu/');
			}

			if (!is_dir('images/menu/w-576/')) {
				mkdir('images/menu/w-576/');
			}

			if (!is_dir('images/menu/w-768/')) {
				mkdir('images/menu/w-768/');
			}

			if (!is_dir('images/menu/w-992/')) {
				mkdir('images/menu/w-992/');
			}

			if (!is_dir('images/menu/w-1200/')) {
				mkdir('images/menu/w-1200/');
			}

			$folderPath = "images/menu/";

			$image_data = $this->upload->data();

			// 576
			$config = array(
				'source_image' => $image_data['full_path'], //path to the uploaded image
				'new_image' => 'images/menu/w-576/' . $image_data["file_name"], //path to
				'maintain_ratio' => true,
				'width' => 576,
				'height' => 576
			);

			$this->load->library('image_lib');
			$this->image_lib->initialize($config);
			$this->image_lib->resize();

			// 768
			$config = array(
				'source_image' => $image_data['full_path'], //path to the uploaded image
				'new_image' => 'images/menu/w-768/' . $image_data["file_name"], //path to
				'maintain_ratio' => true,
				'width' => 768,
				'height' => 768
			);

			$this->load->library('image_lib');
			$this->image_lib->initialize($config);
			$this->image_lib->resize();

			// 992
			$config = array(
				'source_image' => $image_data['full_path'], //path to the uploaded image
				'new_image' => 'images/menu/w-992/' . $image_data["file_name"], //path to
				'maintain_ratio' => true,
				'width' => 992,
				'height' => 992
			);

			$this->load->library('image_lib');
			$this->image_lib->initialize($config);
			$this->image_lib->resize();

			// 1200
			$config = array(
				'source_image' => $image_data['full_path'], //path to the uploaded image
				'new_image' => 'images/menu/w-1200/' . $image_data["file_name"], //path to
				'maintain_ratio' => true,
				'width' => 1200,
				'height' => 1200
			);

			$this->load->library('image_lib');
			$this->image_lib->initialize($config);
			$this->image_lib->resize();

			$filenamestring = 'images/menu/' . $image_data["file_name"];
			$filenamesmallstring = 'images/menu/w-576/' . $image_data["file_name"];

			$record = array('picurl' => $filenamestring, 'small_picurl' => $filenamesmallstring, 'foldername' => 'menu');
			$this->getbase->insert('allpic', $record);
		}

		$menusave = array(
			'menuname' => $this->input->post("menuname"),
			'menudesc' => $this->input->post("menudesc"),
			'location' => $this->input->post("location"),
			'viewtype' => $this->input->post("viewtype"),
			'status' => $this->input->post("status"),
			'link' => $this->input->post("link"),
			'picurl' => $filenamestring,
			'small_picurl' => $filenamesmallstring,
			'language' => $this->current_lang,
			'parentid' => $this->input->post("parentid")
		);
		if ($ids == "") {
			$retmsg = $this->getbase->insert('menu', $menusave);
			$this->getbase->update('menu', array('sort' => $retmsg['insert_id']), $retmsg['insert_id']);
		} else {
			$this->getmenu->menuupdate($menusave, $ids);
		}

		redirect(base_url('admin/menu'), 'refresh');
	}

	public function add()
	{
		$this->load->helper("form");
		// $this->data["menulist"] = $this->getmenu->getinfo();
		$this->data["menulist"] = $this->getbase->getinfo('menu', -1, 1, 100, "language", $this->current_lang, "sort");
		$this->render('apanel/menu/edit');
	}

	public function edit($ids = 0)
	{
		$this->load->helper("form");
		$this->data["menu"] = $this->getmenu->getinfo($ids);
		$this->data["menulist"] = $this->getbase->getinfo('menu', -1, 1, 100, "language", $this->current_lang, "sort");
		$this->render('apanel/menu/edit');

	}

	public function del($ids = 0)
	{
		$this->getmenu->delmenu($ids);
		redirect(base_url('admin/menu'), 'refresh');
	}

	public function sort($ids1, $ids2)
	{
		$this->getmenu->changesort($ids1, $ids2);
		redirect(base_url('admin/menu'), 'refresh');
	}

	public function checklogin()
	{
		if ($this->session->userdata("login")) {
			return true;
		} else {
			return false;
		}
	}
}