<?php
    interface Crud {
        public function save($conn);
        public function readAll($conn);
        public function readUnique($conn);
        public function search($conn);
        public function update($conn);
        public function removeOne($conn);
        public function removeAll($conn);

        public function validateForm();
        public function createFormErrorSessions();
    }
?>