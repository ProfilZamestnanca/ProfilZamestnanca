<?php

namespace App\Classes;


use App\Classes\publication;
use App\Classes\project;
use App\Classes\title;
use App\Classes\subject;
use App\Classes\digitalSkills;
use App\Classes\laboratory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Profiler\Profile;

class Zamestnanec extends Model
{
    use HasFactory;
    public $id;
    private $name;
    private $aboutMe;
    private $workPlace;
    private $department;
    private $room;
    private $function;
    private $contacts;
    private $laboratory = array();
    private $socialSkills = array();
    private $digitalSkills = array();
    public $sortedTitles = array();
    public $sortedPublications = array();
    public $sortedProjects = array();
    public $sortedSubjects = array();
    private $titles = array();
    private $publications = array();
    private $subject = array();
    private $project = array();

    /**
     * Zamestnanec constructor.
     * @param $name
     * @param $aboutMe
     * @param $workPlace
     * @param $department
     * @param $room
     * @param $function
     */
    public function __construct($name, $aboutMe, $workPlace, $department, $room, $function, array $attributes = array())
    {
        parent::__construct($attributes);
        $this->name = $name;
        $this->aboutMe = $aboutMe;
        $this->workPlace = $workPlace;
        $this->department = $department;
        $this->room = $room;
        $this->function = $function;
    }

    public function createContacts($telephone, $mobile, $email,$id)
    {
        $this->contacts = new contacts($mobile, $telephone, $email,$id);
    }

    public function addLaboratory($name,$id)
    {
        array_push($this->laboratory, new laboratory($name,$id));
    }

    public function addSocialSkill($name)
    {
        array_push($this->socialSkills, $name);
    }

    public function getSocialSkills()
    {
        return $this->socialSkills;
    }

    public function addDigitalSkill($name, $level,$id)
    {
        array_push($this->digitalSkills, new digitalSkills($name, $level,$id));
    }

    public function getDigitalSkills()
    {
        return $this->digitalSkills;
    }

    public function getLaboratories()
    {
        return $this->laboratory;
    }

    public function addTitle($name, $shortcut, $year, $school,$id)
    {
        array_push($this->titles, new title($name, $shortcut, $year, $school,$id));
    }

    public function getTitles()
    {
        return $this->titles;
    }

    public function addPublication($name, $content, $year,$id)
    {
        array_push($this->publications, new publication($name, $content, $year,$id));
    }

    public function getPublications()
    {
        return $this->publications;
    }

    public function addSubject($name, $year,$id)
    {
        array_push($this->subject, new subject($name, $year,$id));
    }

    public function getSubjects()
    {
        return $this->subject;
    }

    public function addProject($name, $year,$id)
    {
        array_push($this->project, new project($name, $year,$id));
    }

    public function getProjects()
    {
        return $this->project;
    }

    public function getContacts()
    {
        return $this->contacts;
    }

    public function getPublicationID($publication,$id)
    {
    return 'work-arrow-'.$publication->getYear().'-'.$id;
    }

    public
    function sortProjectsByYear()
    {
        for ($i = 0; count($this->getProjects()) > $i; $i++) {
            $found = false;
            for ($l = 0; count($this->sortedProjects) > $l; $l++) {
                for ($k = 0; count($this->sortedProjects[$l]) > $k; $k++) {
                    if ($this->sortedProjects[$l][$k]->getYear() == $this->getProjects()[$i]->getYear()) {
                        array_push($this->sortedProjects[$l], $this->getProjects()[$i]);
                        $found = true;
                        break;
                    }
                }
            }
            if (!$found) {
                array_push($this->sortedProjects, array($this->getProjects()[$i]));
            }
        }
    }

    public
    function sortPublicationsByYear()
    {
        for ($i = 0; count($this->getPublications()) > $i; $i++) {
            $found = false;
            for ($l = 0; count($this->sortedPublications) > $l; $l++) {
                for ($k = 0; count($this->sortedPublications[$l]) > $k; $k++) {
                    if ($this->sortedPublications[$l][$k]->getYear() == $this->getPublications()[$i]->getYear()) {
                        array_push($this->sortedPublications[$l], $this->getPublications()[$i]);
                        $found = true;
                        break;
                    }
                }
            }
            if (!$found) {
                array_push($this->sortedPublications, array($this->getPublications()[$i]));
            }
        }
    }

    public
    function sortTitleByYear()
    {
        for ($i = 0; count($this->getTitles()) > $i; $i++) {

            $found = false;
            for ($l = 0; count($this->sortedTitles) > $l; $l++) {
                for ($k = 0; count($this->sortedTitles[$l]) > $k; $k++) {
                    if ($this->sortedTitles[$l][$k]->getYear() == $this->getTitles()[$i]->getYear()) {
                        array_push($this->sortedTitles[$l], $this->getTitles()[$i]);
                        $found = true;
                        break;
                    }
                }
            }
            if (!$found) {
                array_push($this->sortedTitles, array($this->getTitles()[$i]));
            }
        }
    }

    public
    function sortSubjectByYear()
    {
        for ($i = 0; count($this->getSubjects()) > $i; $i++) {
            $found = false;
            for ($l = 0; count($this->sortedSubjects) > $l; $l++) {
                for ($k = 0; count($this->sortedSubjects[$l]) > $k; $k++) {
                    if ($this->sortedSubjects[$l][$k]->getYear() == $this->getSubjects()[$i]->getYear()) {
                        array_push($this->sortedSubjects[$l], $this->getSubjects()[$i]);
                        $found = true;
                        break;
                    }
                }
            }
            if (!$found) {
                array_push($this->sortedSubjects, array($this->getSubjects()[$i]));
            }
        }
    }

    public
    function setContacts($telephone, $mobile, $email)
    {
        $this->contacts->setMobile($mobile);
        $this->contacts->setTelephone($telephone);
        $this->contacts->setEmail($email);
    }

    /**
     * @return string[]
     */
    public
    function getFillable(): array
    {
        return $this->fillable;
    }

    /**
     * @param string[] $fillable
     */
    public
    function setFillable(array $fillable): void
    {
        $this->fillable = $fillable;
    }

    /**
     * @return mixed
     */
    public
    function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public
    function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public
    function getAboutMe()
    {
        return $this->aboutMe;
    }

    /**
     * @param mixed $aboutMe
     */
    public
    function setAboutMe($aboutMe): void
    {
        $this->aboutMe = $aboutMe;
    }

    /**
     * @return mixed
     */
    public
    function getWorkPlace()
    {
        return $this->workPlace;
    }

    /**
     * @param mixed $workPlace
     */
    public
    function setWorkPlace($workPlace): void
    {
        $this->workPlace = $workPlace;
    }

    /**
     * @return mixed
     */
    public
    function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param mixed $department
     */
    public
    function setDepartment($department): void
    {
        $this->department = $department;
    }

    /**
     * @return mixed
     */
    public
    function getRoom()
    {
        return $this->room;
    }

    /**
     * @param mixed $room
     */
    public
    function setRoom($room): void
    {
        $this->room = $room;
    }

    /**
     * @return mixed
     */
    public
    function getFunction()
    {
        return $this->function;
    }

    /**
     * @param mixed $function
     */
    public
    function setFunction($function): void
    {
        $this->function = $function;
    }


}
