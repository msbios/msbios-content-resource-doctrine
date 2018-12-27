<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Content\Resource\Doctrine\Form;

use MSBios\Content\Resource\Form\TextPageForm as DefaultTextPageForm;
use MSBios\Doctrine\Form\Element\PublishingState;

/**
 * Class TextPageForm
 * @package MSBios\Content\Resource\Doctrine\Form
 */
class TextPageForm extends DefaultTextPageForm
{
    /**
     * @inheritdoc
     *
     * @return $this|DefaultTextPageForm|void
     */
    public function init()
    {
        parent::init();

        $this->add([
            'type' => PublishingState::class,
            'name' => 'state'
        ]);

        return $this;
    }
}
