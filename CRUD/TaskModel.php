<?php
    class Task{
        public $taskArray;
        public $taskId = 0;

        public function Create($taskName,$status){
            $this->taskName = $taskName;
            $this->status = $status;
            $this->taskArray[$this->taskId] = [$taskName,$status];
            echo "\n New Task Created \n "."Task Name \t ". $this->taskName;
            echo "\n Task ID \t ". $this->taskId;
            $this->taskId++;
            if($status == True){
                echo "\n Task Status \t Is Completed \n";
            }
            else{
                echo "\n Task Status \t Is not Completed \n";
            }
        }

        public function View(){

            echo "\n \n Welcome to CRUD....... \n";

            foreach($this->taskArray as $key=>[$para1,$para2]){
                echo "\n Task ID \t ".$key;
                echo "\n Task Name \t ".$para1;
                if($para2 == True){
                    echo "\n Task Status \t Is Completed \n";
                }
                else{
                    echo "\n Task Status \t Is not Completed \n";
                }
            }
        }

        public function Update($id,$update,$changed){
            if($update == "name"){
                $this->taskArray[$id][0] = $changed;
                echo "\n Name Updated \n";
            }
            else if($update == "status"){
                $this->taskArray[$id][1] = $changed;
                echo "\n Status Updated \n";
            }
        }

        public function Delete($id){
            echo "\n Deleting ..... ";
            unset($this->taskArray[$id]);
            echo "\n This task id $id is deleted";
        }
    }
?>