<?php namespace App\Http\TeamWorkPm\Category;

class Project extends Model
{

    /**
     * Retrieve all Project Categories
     * GET /projectCategories.xml
     * Will return all project categories
     */
    public function getAll()
    {
        return $this->rest->get($this->action);
    }

    protected function init()
    {
        list ($parent, $type) = explode('-', $this->parent);
        $this->parent = $parent;
        $this->action = $type . 'Categories';
        $this->fields = [
            'name' => true,
            'parent' => false
        ];
    }
}