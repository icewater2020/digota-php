<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: github.com/digota/digota/order/orderpb/order.proto

namespace GPBMetadata\GithubCom\Digota\Digota\Order\Orderpb;

class Order
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\GithubCom\Digota\Digota\Payment\Paymentpb\Payment::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af60e0a326769746875622e636f6d2f6469676f74612f6469676f74612f" .
            "6f726465722f6f7264657270622f6f726465722e70726f746f12076f7264" .
            "6572706222ab030a054f72646572120a0a026964180120012809120e0a06" .
            "616d6f756e7418022001280312250a0863757272656e637918032001280e" .
            "32132e7061796d656e7470622e43757272656e637912210a056974656d73" .
            "18042003280b32122e6f7264657270622e4f726465724974656d122e0a08" .
            "6d6574616461746118052003280b321c2e6f7264657270622e4f72646572" .
            "2e4d65746164617461456e747279120d0a05656d61696c18062001280912" .
            "100a08636861726765496418072001280912250a06537461747573180820" .
            "01280e32152e6f7264657270622e4f726465722e73746174757312230a08" .
            "7368697070696e6718092001280b32112e6f7264657270622e5368697070" .
            "696e6712100a076372656174656418e6072001280312100a077570646174" .
            "656418e707200128031a2f0a0d4d65746164617461456e747279120b0a03" .
            "6b6579180120012809120d0a0576616c75651802200128093a023801224a" .
            "0a06737461747573120b0a0743726561746564100012080a045061696410" .
            "01120c0a0843616e63656c65641002120d0a0946756c66696c6c65641003" .
            "120c0a0852657475726e6564100422e4010a094f726465724974656d1225" .
            "0a047479706518012001280e32172e6f7264657270622e4f726465724974" .
            "656d2e5479706512100a087175616e74697479180220012803120e0a0661" .
            "6d6f756e7418032001280312250a0863757272656e637918042001280e32" .
            "132e7061796d656e7470622e43757272656e6379120e0a06706172656e74" .
            "18052001280912130a0b6465736372697074696f6e18062001280922420a" .
            "0454797065120c0a087265736572766564100012070a03736b751001120c" .
            "0a08646973636f756e74100212070a037461781003120c0a087368697070" .
            "696e67100422e7010a085368697070696e67120c0a046e616d6518012001" .
            "2809120d0a0570686f6e65180220012809122a0a07616464726573731803" .
            "2001280b32192e6f7264657270622e5368697070696e672e416464726573" .
            "73120f0a076361727269657218042001280912160a0e747261636b696e67" .
            "4e756d6265721805200128091a690a0741646472657373120d0a056c696e" .
            "6531180120012809120c0a0463697479180220012809120f0a07636f756e" .
            "747279180320012809120d0a056c696e653218042001280912120a0a706f" .
            "7374616c436f6465180520012809120d0a05737461746518062001280922" .
            "3a0a094f726465724c697374121e0a066f726465727318012003280b320e" .
            "2e6f7264657270622e4f72646572120d0a05746f74616c18022001280522" .
            "f0010a0a4e65775265717565737412250a0863757272656e637918012001" .
            "280e32132e7061796d656e7470622e43757272656e637912210a05697465" .
            "6d7318022003280b32122e6f7264657270622e4f726465724974656d1233" .
            "0a086d6574616461746118032003280b32212e6f7264657270622e4e6577" .
            "526571756573742e4d65746164617461456e747279120d0a05656d61696c" .
            "18042001280912230a087368697070696e6718052001280b32112e6f7264" .
            "657270622e5368697070696e671a2f0a0d4d65746164617461456e747279" .
            "120b0a036b6579180120012809120d0a0576616c75651802200128093a02" .
            "380122180a0a47657452657175657374120a0a0269641801200128092270" .
            "0a0a50617952657175657374120a0a026964180120012809121d0a046361" .
            "726418022001280b320f2e7061796d656e7470622e4361726412370a1170" .
            "61796d656e7450726f7669646572496418032001280e321c2e7061796d65" .
            "6e7470622e5061796d656e7450726f76696465724964221b0a0d52657475" .
            "726e52657175657374120a0a02696418012001280922aa010a0b4c697374" .
            "52657175657374120c0a0470616765180120012803120d0a056c696d6974" .
            "18022001280312270a04736f727418032001280e32192e6f726465727062" .
            "2e4c697374526571756573742e536f727422550a04536f7274120b0a074e" .
            "61747572616c1000120f0a0b43726561746564446573631001120e0a0a43" .
            "7265617465644173631002120f0a0b55706461746564446573631003120e" .
            "0a0a5570646174656441736310043280020a0c4f72646572536572766963" .
            "65122c0a034e657712132e6f7264657270622e4e6577526571756573741a" .
            "0e2e6f7264657270622e4f726465722200122c0a0347657412132e6f7264" .
            "657270622e476574526571756573741a0e2e6f7264657270622e4f726465" .
            "722200122c0a0350617912132e6f7264657270622e506179526571756573" .
            "741a0e2e6f7264657270622e4f72646572220012320a0652657475726e12" .
            "162e6f7264657270622e52657475726e526571756573741a0e2e6f726465" .
            "7270622e4f72646572220012320a044c69737412142e6f7264657270622e" .
            "4c697374526571756573741a122e6f7264657270622e4f726465724c6973" .
            "74220042285a266769746875622e636f6d2f6469676f74612f6469676f74" .
            "612f6f726465722f6f726465727062620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
