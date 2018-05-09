public function _construct()
{
$this->load->database();
}
public function get_kurz($id =FALSE)
{
if($id == FALSE)
{
$query= $this->db->get('kurz');
return $query->result_array();
}
$query= $this->db->get_where('kurz',array('kurz_lektor'=>$id));
return $query->row_array();
}
public function set_kurz($id=0)
{
$this->load->helper('url');
foreach($_POST as $key=>$value){
if($key!='submit')
$data[$key]= $value;
}
if($id==0){
return $this->db->insert('kurz',$data);
}else{
$this->db->where('kurz_lektor',$id);
return $this->db->update('kurz',$data);
}
}
public function delete_kurz($id)
{
$this->db->where('id',$id);
return $this->db->delete('kurz');
}