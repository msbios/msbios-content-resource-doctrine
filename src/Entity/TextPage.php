<?php
/**
 * @access protected
 * @author Judzhin Miles <judzhin[at]gns-it.com>
 */

namespace MSBios\Content\Resource\Doctrine\Entity;

use Doctrine\ORM\Mapping as ORM;
use MSBios\Content\Resource\Doctrine\Entity;
use MSBios\Doctrine\DBAL\Types\PublishingStateType;
use MSBios\Resource\Doctrine\MetableAwareInterface;
use MSBios\Resource\Doctrine\MetableAwareTrait;
use MSBios\Resource\Doctrine\NameableAwareInterface;
use MSBios\Resource\Doctrine\NameableAwareTrait;
use MSBios\Resource\Doctrine\RowStatusableAwareInterface;
use MSBios\Resource\Doctrine\RowStatusableAwareTrait;
use MSBios\Resource\Doctrine\TimestampableAwareInterface;
use MSBios\Resource\Doctrine\TimestampableAwareTrait;

/**
 * Class TextPage
 * @package MSBios\Content\Resource\Doctrine\Entity
 *
 * @ORM\Entity(repositoryClass="MSBios\Resource\Doctrine\EntityRepository")
 * @ORM\Table(name="cnt_t_text_pages",
 *     indexes={
 *          @ORM\Index(name="rowstatus", columns={"rowstatus"})}
 *     )
 */
class TextPage extends Entity implements
    NameableAwareInterface,
    MetableAwareInterface,
    TimestampableAwareInterface,
    RowStatusableAwareInterface
{
    use NameableAwareTrait;
    use MetableAwareTrait;
    use TimestampableAwareTrait;
    use RowStatusableAwareTrait;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=500)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="publishing_state")
     */
    private $state = PublishingStateType::PUBLISHING_STATE_DRAFT;

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     * @return $this
     */
    public function setSlug(string $slug)
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return $this
     */
    public function setContent(string $content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return $this
     */
    public function setState(string $state)
    {
        $this->state = $state;
        return $this;
    }
}
