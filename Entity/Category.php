<?php

    class Category {
        // Attributs
        private int $id;
        private string $title;
        private string $name;
        private string $color;

        // Constructeurs
                public function __construct(array $data){
                $this->hydrate($data);
                } 


                // Methodes

                public function hydrate(array $data): void
        {
                foreach ($data as $key => $value) {
                $method = "set".ucfirst($key); //setId, setName, setColor
                if (method_exists($this, $method)){
                        $this->$method($value); // setId(1), setName("Avatar"), etc...
                        } 
                }
        }
        public function getId()
        {
                return $this->id;
        }
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        } 
        public function getTitle()
        {
                return $this->title;
        }
        public function setTitle($title)
        {
                $this->title = $title;

                return $this;
        } 
        public function getName()
        {
                return $this->name;
        } 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }
        public function getColor()
        {
                return $this->color;
        } 
        public function setColor($color)
        {
                $this->color = $color;

                return $this;
        }
}

?>