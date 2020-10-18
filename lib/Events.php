<?php
class Events{
    private $db;
    public function __construct(){
        $this->db=new Database;
    }
    //get all jobs
    public function getAllEvents(){
        $this->db->query("SELECT * FROM events ORDER BY post_date DESC");

        //Assign Result Set
        $result=$this->db->resultSet();

        return $result;
    }

    // get categories
    public function getCategories(){
        $this->db->query("SELECT * From categories");

        //Assign Result Set
        $result=$this->db->resultSet();

        return $result;

    }

    // get by category
    public function getByCategory($category){
        $this->db->query("SELECT * FROM events WHERE events.category_id=$category ORDER BY post_date DESC");

        //Assign Result Set
        $result=$this->db->resultSet();

        return $result;
    }

    // get cat for filter name
    public function getCategory($category_id){
        $this->db->query("SELECT * FROM categories WHERE id = :category_id");
        $this->db->bind(':category_id',$category_id);

        // assign row
        $row=$this->db->single();
        return $row;
    }

    // Get Event
    public function getEvent($id){
        $this->db->query("SELECT * FROM events WHERE id = :id");
        $this->db->bind(':id',$id);

        // assign row
        $row=$this->db->single();
        return $row;
    }

    // Create event
    public function create($data){
        //insert query

        $this->db->query("INSERT INTO events (category_id,event_title,imageUrl,organization,description,date,location,contact_user,contact_email) VALUES (:category_id,:event_title,:imageUrl,:organization,:description,:date,:location,:contact_user,:contact_email)");

        // bind data

        $this->db->bind(':category_id',$data['category_id']);
        $this->db->bind(':event_title',$data['event_title']);
        $this->db->bind(':imageUrl',$data['imageUrl']);
        $this->db->bind(':organization',$data['organization']);
        $this->db->bind(':description',$data['description']);
        $this->db->bind(':location',$data['location']);
        $this->db->bind(':date',$data['date']);
        $this->db->bind(':contact_user',$data['contact_user']);
        $this->db->bind(':contact_email',$data['contact_email']);
        
        //execute

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    
    }

    //delete event

    public function delete($id){
        //insert query

        $this->db->query("DELETE FROM events WHERE id=$id");
        
        //execute

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
        
        
    }

    public function update($id,$data){
        //update query

        $this->db->query("UPDATE events SET
        category_id=:category_id,
        event_title=:event_title,
        imageUrl=:imageUrl,
        organization=:organization,
        description=:description,
        location=:location,
        date=:date,
        contact_user=:contact_user,
        contact_email=:contact_email,
        where id=$id
        ");

        // bind data

        $this->db->bind(':category_id',$data['category_id']);
        $this->db->bind(':event_title',$data['event_title']);
        $this->db->bind(':imageUrl',$data['imageUrl']);
        $this->db->bind(':organization',$data['organization']);
        $this->db->bind(':description',$data['description']);
        $this->db->bind(':location',$data['location']);
        $this->db->bind(':date',$data['date']);
        $this->db->bind(':contact_user',$data['contact_user']);
        $this->db->bind(':contact_email',$data['contact_email']);
        
        //execute

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    
    }


}