<?php

namespace GoMage\PWATest\Test\GraphQl;

use Magento\TestFramework\TestCase\GraphQlAbstract;

class TestMessageTest extends GraphQlAbstract
{

    /**
     * @throws \Exception
     */
    public function testMessage()
    {

        $query = <<<QUERY
                    query {
                        testMessage {
                                message
                            }
                            }
                    QUERY;

        $response = $this->graphQlMutation($query);
        self::assertIsString(
            $response['testMessage']['message']
        );
    }
}
