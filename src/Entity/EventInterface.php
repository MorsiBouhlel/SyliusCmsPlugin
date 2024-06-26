<?php

/*
 * This file was created by developers working at BitBag
 * Do you need more information about us and what we do? Visit our https://bitbag.io website!
 * We are hiring developers from all over the world. Join us and start your new, exciting adventure and become part of us: https://bitbag.io/career
*/

declare(strict_types=1);

namespace BitBag\SyliusCmsPlugin\Entity;

use Sylius\Component\Channel\Model\ChannelsAwareInterface;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\SlugAwareInterface;
use Sylius\Component\Resource\Model\TimestampableInterface;
use Sylius\Component\Resource\Model\ToggleableInterface;
use Sylius\Component\Resource\Model\TranslatableInterface;

interface EventInterface extends
    ResourceInterface,
    TranslatableInterface,
    ToggleableInterface,
    ProductsAwareInterface,
    SectionableInterface,
    TimestampableInterface,
    ChannelsAwareInterface,
    ContentableInterface,
    SlugAwareInterface
{
    public function getCode(): ?string;

    public function setCode(?string $code): void;

    public function getMetaKeywords(): ?string;

    public function setMetaKeywords(?string $metaKeywords): void;

    public function getMetaDescription(): ?string;

    public function setMetaDescription(?string $metaDescription): void;

    public function getContent(): ?string;

    public function setContent(?string $content): void;

    public function getName(): ?string;

    public function setName(?string $name): void;

    public function getNameWhenLinked(): ?string;

    public function setNameWhenLinked(?string $nameWhenLinked): void;

    public function getBreadcrumb(): ?string;

    public function setBreadcrumb(?string $breadcrumb): void;

    public function getDescriptionWhenLinked(): ?string;

    public function setDescriptionWhenLinked(?string $descriptionWhenLinked): void;

    public function getTitle(): ?string;

    public function setTitle(?string $title): void;

    public function getStartAt(): ?\DateTimeImmutable;

    public function setStartAt(?\DateTimeImmutable $startAt): void;

    public function getEndAt(): ?\DateTimeImmutable;

    public function setEndAt(?\DateTimeImmutable $endAt): void;

    public function getLocation(): ?string;

    public function setLocation(?string $location): void;
}
