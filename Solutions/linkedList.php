<?php

namespace DSA\Solutions;
require_once __DIR__ . '/../Helpers/functions.php';

use DSA\Helpers\Functions;

class Node {
    private int $data;
    private Node $next;

    public function __construct(int $data)
    {
        $this->data = $data;
    }

    public function getData(): int
    {
        return $this->data;
    }

    public function setData(int $data): void
    {
        $this->data = $data;
    }

    public function getNextNode(): Node
    {
        return $this->next;
    }

    public function setNextNode(Node $node): void
    {
        $this->next = $node;
    }
}

class LinkedNodeList {
    private array $nodes = [];

    public function __construct(Node $head)
    {
        $this->nodes[] = $head;
    }
    public function getNodes(): array
    {
        return $this->nodes;
    }

    public function addNodes(Node | array $nodes): void
    {
        foreach ($nodes as $node) {
            if ($node !== null) {
                $lastNode = end($this->nodes);
                $lastNode->setNextNode($node);
                $this->nodes[] = $node;
            }
        }
    }

    public function getNodeCount(): int
    {
        $count = 0;

        foreach ($this->getNodes() as $node) {
            if ($node === null) {
                continue;
            }

            $count++;
        }

        return $count;
    }

    public function getNodeSum(): int
    {
        $sum = 0;

        foreach ($this->getNodes() as $node) {
            if ($node === null) {
                continue;
            }

            $sum += $node->getData();
        }

        return $sum;
    }
}

$head = new Node(8);

$nodeA = new Node(10);
$nodeB = new Node(3);
$nodeC = new Node(6);
$nodeD = new Node(5);

$nodeList = new LinkedNodeList($head);
$nodeList->addNodes([$nodeA, $nodeB, $nodeC, $nodeD]);

Functions::dump($nodeList->getNodeSum());