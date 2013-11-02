<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: jason
 * Date: 11/1/13
 * Time: 5:53 PM
 */


class Clients_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function create_client($firstName, $lastName, $fullName, $address, $state, $zip, $phone, $email, $form) {

        $dataClient = array(
            'FirstName' => $firstName,
            'LastName' => $lastName,
            'FullName' => $fullName,
            'Address' => $address,
            'State' => $state,
            'Zip' => $zip,
            'Phone' => $phone,
            'Email' => $email,
        );

        $this->db->select('*')
            ->from('clients')
            ->where('Email', $email);

        $query = $this->db->get();

        $row = $query->row_array();
        $num = $query->num_rows();

        if ($num < 1)
        {
            $this->db->insert('clients', $dataClient);

            $dataQuote = array(
                'clientid' => $this->db->insert_id(),
                'Form' => $form,
                'uniqueKey'   => random_string('alnum', 45)
            );

            $this->db->insert('forms', $dataQuote);

            return $this->db->insert_id();

        } else {

            foreach ($query->result() as $row)
            {
                $clientid = $row->idclients;
            }

            $dataQuote = array(
                'clientid' => $clientid,
                'Form' => $form,
                'uniqueKey'   => random_string('alnum', 45)
            );

            $this->db->insert('forms', $dataQuote);

            return $this->db->insert_id();
        }

    }

    function get_key($formid) {

        $this->db->select('uniqueKey')
            ->from('forms')
            ->where('idforms', $formid);

        $query = $this->db->get();

        return $query;
    }

    /* Not Being Used Yet */
    function email_client() {

        $this->db->select('*')
            ->from('clients')
            ->join('forms','forms.clientid = clients.idclients')
            ->where('forms.Unsubscribed', '0')
            ->where('forms.EmailLevel <', '3');

        $query = $this->db->get();

        $row = $query->row_array();
        $num = $query->num_rows();

        if ($num < 1)
        {
            return null;

        } else {

            return $query;
        }

    }

    /* Not Being Used Yet */
    function getCustomer($email, $key) {

        $this->db->select('*')
            ->from('clients')
            ->join('forms','forms.clientid = clients.idclients')
            ->where('forms.uniqueKey', $key);

        $query = $this->db->get();

        $row = $query->row_array();
        $num = $query->num_rows();

        if ($num < 1)
        {
            return null;

        } else {
            return $query;
        }

    }
} 