<?php

namespace mirolabs\ruch\client\Enum;

class PackStatus
{
    const IN_REGIONAL_SORTING_PLANT  = 100;
    const IN_TRANSPORT_TO_SC         = 110;
    const IN_TRANSPORT_FROM_SENDER   = 200;
    const CANCELED                   = 201;
    const POSTED_IN_POP              = 210;
    const IN_TRANSPORT_FROM_POP      = 230;
    const IN_CENTRAL_SORTING_PLANT   = 300;
    const IN_CENTRAL_SORTING         = 400;
    const IN_TRANSPORT_TO_EXPEDITION = 450;
    const IN_EXPEDITION              = 653;
    const IN_TRANSPORT_TO_POP        = 680;
    const IN_POP                     = 690;
    const IN_POP_SMS                 = 695;
    const EXPIRED                    = 700;
    const RETURN_EXPIRED             = 709;
    const RETURN_WRONG_POP           = 729;
    const COMPLAINT                  = 749;
    const RETURN_TO_EXPEDITION       = 790;
    const RETURN_TO_SORTING          = 800;
    const RETURN_TO_SENDER           = 900;
    const RECEIVED_BY_CUSTOMER       = 1000;
    const RECEIVED                   = 1100;
}
