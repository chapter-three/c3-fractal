<?php

namespace Drupal\fieldz_formatterz\Plugin\ExtraField\Display;

use Drupal\Core\Cache\CacheableMetadata;
use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\extra_field\Plugin\ExtraFieldDisplayBase;

/**
 * Example Extra field Display.
 *
 * @ExtraFieldDisplay(
 *   id = "button_group_paragraph_field_data",
 *   label = @Translation("Button group"),
 *   bundles = {
 *     "paragraph.button_group"
 *   }
 * )
 */
class ButtonGroupParagraphFieldData extends ExtraFieldDisplayBase {

  /**
   * {@inheritdoc}
   */
  public function view(ContentEntityInterface $entity) {
    $elements = [];
    $cache = new CacheableMetadata();

    if ($entity->hasField('field_buttons')) {
      $buttons = $entity->get('field_buttons')->referencedEntities();

      if (!empty($buttons)) {
        foreach ($buttons as $key => $button) {
          $link = $button->get('field_link');
          $cache->addCacheableDependency($button);
          $elements[] = [
            'text' => $link->title,
            'url' => $link->first()->getUrl()->toString(),
            'style' => $button->field_button_style->value,
          ];
        }
      }
    }

    $cache->applyTo($elements);

    return $elements;

  }

}
